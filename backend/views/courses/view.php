<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */

$this->title = $model->title_en;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card p-4">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_en',
            'title_uz',
            'description_en:ntext',
            'description_uz:ntext',
            'price',
            'mentor',
            // 'poster_img',
            [
                'attribute'=>'poster_img',
                'label'=>'Category',
                'format'=>'html',
                'value'=>$model->img
            ],
            [
                'attribute'=>'videolink',
                'format'=>'html',
                'value'=>function($model){
                    return '<a href="https://www.youtube.com/embed/'.$model->videolink.'">'.$model->videolink.'</a>';
                }
            ],
            [
                'attribute'=>'category_id',
                'label'=>'Category',
                'format'=>'html',
                'value'=>$model->category->title_en
            ],
            // 'status',
            [
                'attribute'=>'status',
                'label'=>'Status',
                'format'=>'html',
                'value'=>$model->statusLabel
            ],
            'created_at:dateTime',
            'updated_at:dateTime',
        ],
    ]) ?>

</div>
