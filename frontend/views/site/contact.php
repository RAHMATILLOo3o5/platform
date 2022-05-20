<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
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

<section class="contact_area section_gap">
    <div class="container">
        <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848"></div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="ti-home"></i>
                        <h6>California, United States</h6>
                        <p>Santa monica bullevard</p>
                    </div>
                    <div class="info_item">
                        <i class="ti-headphone"></i>
                        <h6><a href="#">00 (440) 9865 562</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="ti-email"></i>
                        <h6><a href="#">support@colorlib.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => 'row contact_form']]) ?>

                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput([ 'placeholder'=>'Enter your name'])->label(false) ?>

                        <!-- <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="" /> -->
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['placeholder'=>'Enter email address'])->label(false) ?>
                        <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" /> -->
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'subject')->textInput(['placeholder'=>'Enter Subject'])->label(false) ?>
                        <!-- <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required="" /> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder'=>'Enter Message'])->label(false) ?>

                        <!-- <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea> -->
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <?= Html::submitButton('Submit', ['class' => 'btn primary-btn', 'name' => 'contact-button']) ?>
                    <!-- 
                    <button type="submit" value="submit" class="btn primary-btn">
                        Send Message
                    </button> -->
                </div>
                <?php ActiveForm::end(); ?>

                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->