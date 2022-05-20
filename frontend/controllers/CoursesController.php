<?php

namespace frontend\controllers;

use Yii;
use common\models\Coursecoment;
use common\models\Enroll;
use common\models\Like;
use frontend\models\Ccategory;
use frontend\models\Courses;
use common\models\User;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class CoursesController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup', 'enroll', 'like', 'coment'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'enroll', 'like', 'coment'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $m = Courses::find();
        $pagination = new Pagination([
            'totalCount' => $m->count(),
            'pageSize' => 5
        ]);
        $categories = Ccategory::find()->where(['status' => 1])->asArray()->all();
        $model = $m->limit($pagination->limit)->offset($pagination->offset)->andWhere(['status' => 1])->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('index', compact('model', 'pagination', 'categories'));
    }
    public function actionViewCourse($id)
    {
        $model = $this->findModel($id);
        $coment = new Coursecoment();
        $pupils = Enroll::find()->andWhere(['course_id' => $model['id']])->count();
        $alike = Courses::find()->andWhere(['category_id' => $model['category_id']])->asArray()->all();
        $likes = Like::find()->andWhere(['course_id' => $model['id']])->count();
        $coments = Coursecoment::find()->andWhere(['course_id' => $id])->orderBy(['id' => SORT_DESC])->all();
        return $this->render('view', compact('model', 'pupils', 'likes', 'coment', 'coments', 'alike'));
    }
    public function actionComent($id)
    {
        $model = $this->findModel($id);
        $coment = new Coursecoment();
        if ($this->request->isPost) {
            if ($coment->load($this->request->post())) {
                $coment->course_id = $id;
                $coment->save();
                return $this->redirect(['/courses/view-course', 'id' => $id]);
            }
        } else {
            $coment->loadDefaultValues();
        }
    }

    public function actionEnroll($id)
    {

        $user_id = Yii::$app->user->identity->id;

        $user_exist = Enroll::findOne(['course_id' => $id]);

        if (!$user_exist) {
            $enroll = new Enroll();
            $enroll->user_id = $user_id;
            $enroll->course_id = $id;
            $enroll->created_at = time();
            $enroll->updated_at = time();
            if ($enroll->save()) {
                return $this->redirect(['/courses/view-course', 'id' => $id]);
            }
        } else {
            return $this->redirect(['/courses/view-course', 'id' => $id]);
        }
    }

    public function actionLike($id)
    {
        $course = $this->findModel($id);
        $like = Like::find()->where(['course_id' => $id, 'user_id' => Yii::$app->user->id])->one();
        if (!$like) {
            $model = new Like();
            $model->user_id = Yii::$app->user->id;
            $model->course_id = $id;
            $model->created_at = time();
            $model->updated_at = time();
            if ($model->save()) {
                return $this->renderAjax('_like', compact('course'));
            } else {
                return $this->redirect(Yii::$app->request->referrer);
            }
        } else {
            $model = Like::find()->where(['user_id' => Yii::$app->user->id, 'course_id' => $id])->one();
            $model->delete();
            return $this->renderAjax('_like', compact('course'));
        }
    }

    public function actionAll()
    {
        return $this->redirect(['/courses/index']);
    }


    public function actionOrder($id)
    {
        $m = Courses::find();
        $pagination = new Pagination([
            'totalCount' => $m->count(),
            'pageSize' => 5
        ]);
        $categories = Ccategory::find()->where(['status' => 1])->asArray()->all();
        $model = $m->limit($pagination->limit)->offset($pagination->offset)->andWhere(['status' => 1])->andWhere(['category_id' => $id])->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('index', compact('model', 'pagination', 'categories'));
    }

    public function actionEnrollCourses()
    {
        $user_id = Yii::$app->user->identity->id;
        $enroll = Enroll::find()->where(['user_id' => $user_id])->all();

        return $this->render('enroll-courses', compact('enroll'));
    }

    

    public function findModel($id)
    {
        if (isset($id)) {
            return Courses::find()->andWhere(['id' => $id])->asArray()->one();
        } else {
            throw new NotFoundHttpException('Courses Not found');
        }
    }
}
