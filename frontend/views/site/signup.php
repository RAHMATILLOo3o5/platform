<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;
?>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2><?= $this->title ?></h2>
                        <div class="page_link">
                            <a href="<?= Url::home() ?>">Home</a>
                            <a><?= $this->title ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3"><?= $this->title ?></h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3">
                <div class="register_form">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['class' => 'form_area']]); ?>
                    <div class="row">
                        <div class="col-lg-12 form_group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Your Name'])->label(false) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form_group">

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Your Email Address'])->label(false) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form_group">

                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Your Password'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'primary-btn', 'name' => 'signup-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

</section>