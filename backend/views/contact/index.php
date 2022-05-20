<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contacts');

?>

        
        <?php Pjax::begin(); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions'=>[
                'class'=>'table table-head-fixed text-nowrap'
            ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'email:email',
                'subject',

                [
                    'attribute' => 'body',
                    'label' => 'Body',
                    'format' => 'html',
                    'value' => 'shortText'
                ],
                [
                    'attribute' => 'status',
                    'label' => 'Status',
                    'filter' => [
                        '1' => 'O\'qilgan',
                        '0' => 'O\'qilmagan',
                    ],
                    'format' => 'html',
                    'value' => 'statusLabel'
                ],
                // 'created_at',
                
                [
                    'class' => ActionColumn::class,
                    'visibleButtons' =>
                    [
                        'update' => function ($model) {
                            return \Yii::$app->user->can('updatePost', ['post' => $model]);
                        },
                    ],
                    // 'urlCreator' => function ($action, $model, $key, $index, $column) {
                    //     return Url::toRoute([$action, 'id' => $model->id]);
                    // }
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>
    