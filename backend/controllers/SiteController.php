<?php

namespace backend\controllers;

use common\models\LoginForm;
use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
// use yii\backend\RulesController;
use yii\helpers\VarDumper;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'profile', 'username', 'password'],
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        // if (Yii::$app->user->can('admin')) {
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }

            $this->layout = 'main-login';

            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }

            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        // } else{
        //     return $this->goBack();
        // }
    }
    public function actionProfile($id)
    {
        $model = User::findOne($id);
        if (Yii::$app->request->isPost) {
            $model->username = $_POST['username'];
            if ($model->update()) {
                return $this->refresh();
            }
        }
        return $this->render('profile', compact('model'));
    }
    public function actionPassword($id)
    {
        $model = User::findOne($id);
        if (Yii::$app->request->isPost) {
            $model->password_hash = Yii::$app->security->generatePasswordHash($_POST['password']);
            if ($model->update()) {
                return $this->redirect(['/site/profile', 'id' => $model->id]);
            }
        }
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
