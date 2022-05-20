<?php

namespace backend\controllers;

class ChatsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'main-chat';
        return $this->render('index');
    }
    
}
