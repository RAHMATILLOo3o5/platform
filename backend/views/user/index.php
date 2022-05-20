<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-lg-10 offset-1">
        <div class="card card-info">
            <div class="card-header"></div>
            <div class="card-body">

                <p>
                    <?= Html::a('Create User', ['create'], ['class' => 'btn btn-primary']) ?>
                </p>

                <?php Pjax::begin(); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'username',
                        // 'auth_key',
                        // 'password_hash',
                        // 'password_reset_token',
                        'email:email',
                        //'status',
                        'created_at:dateTime',
                        //'updated_at',
                        //'verification_token',
                        [
                            'class' => ActionColumn::class,
                            'urlCreator' => function ($action, $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                    ],
                ]); ?>

                <?php Pjax::end(); ?>

            </div>
        </div>
    </div>

</div>