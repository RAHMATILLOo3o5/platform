<?php

namespace frontend\controllers;

use common\models\Ecoment;
use frontend\models\Events;
use Yii;
use yii\filters\AccessControl;

class EventsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['coment'],
                'rules' => [
                    [
                        'actions' => ['logout', 'enroll', 'like', 'coment'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $events = Events::find()->asArray()->all();
        return $this->render('index', [
            'title' => 'Events',
            'events' => $events
        ]);
    }


    public function actionComent($id)
    {
        $coment = new Ecoment();
        if ($this->request->isPost) {
            if ($coment->load($this->request->post())) {
                $coment->event_id = $id;
                $coment->user_id = Yii::$app->user->id;
                $coment->save();
                return $this->redirect(['/events/view-event', 'id' => $id]);
            }
        } else {
            $coment->loadDefaultValues();
        }
    }


    public function actionViewEvent($id)
    {
        $model = Events::find()->where(['id' => $id])->asArray()->one();
        $coment = new Ecoment();
        $coments = Ecoment::find()->where(['event_id'=>$id])->all();
        $title = $model['title_' . Yii::$app->language];
        return $this->render('view-event', compact('model', 'title', 'coment', 'coments'));
    }
}
