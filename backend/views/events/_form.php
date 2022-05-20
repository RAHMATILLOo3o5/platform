<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\file\FileInput;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_en')->widget(CKEditor::class, [
        'editorOptions' => [
            'preset' => 'basic',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'content_uz')->widget(CKEditor::class, [
        'editorOptions' => [
            'preset' => 'basic',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'img')->widget(FileInput::class) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::class, [
        'pluginOptions' => [
            'format' => 'dd-M',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'internal')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>