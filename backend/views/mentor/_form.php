<?php

use kartik\file\FileInput;
use kartik\switchinput\SwitchInput;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mentor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mentor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget(
        FileInput::class,
        [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'allowedFileExtensions' => ['jpg', 'gif', 'png'],
                'showUpload' => false,
                'multiple' => false,
            ],
        ]
    ) ?>
    

    <?= $form->field($model, 'description')->widget(CKEditor::class, 
    [
        'editorOptions' => [
            'preset' => 'basic',
            'inline' => false, 
        ],
    ]); ?>
    

    
    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pinterest')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'status')->widget(
        SwitchInput::class
    ) ?>

    <div class="form-group text-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
