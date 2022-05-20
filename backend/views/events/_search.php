<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\EventsQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'content_en') ?>

    <?= $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'internal') ?>

    <?php // echo $form->field($model, 'caty_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
