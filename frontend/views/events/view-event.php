<?php

use kartik\form\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = $title;
?>
<style>
    .scroll{
        max-height: 700px !important;
        overflow-y: scroll !important;
    }
</style>
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


<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?= Url::base() ?>/img/event/<?= $model['img'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">

                            <ul class="blog_meta list">
                                <!-- <li><a href="#">Mark wiens<i class="ti-user"></i></a></li> -->
                                <li><a><?= $model['date'] ?><i class="ti-calendar"></i></a></li>
                                <li><a><?= $model['internal'] ?><i class="ti-time"></i></a></li>
                                <!-- <li><a href="#">06 Comments<i class="ti-comment"></i></a></li> -->
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-github"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2><?= $model['title_' . Yii::$app->language] ?></h2>
                        <p class="excert">
                            <?= $model['content_' . Yii::$app->language] ?>
                        </p>

                    </div>

                </div>


            </div>
            <div class="col-lg-5">
                <div class="blog_right_sidebar">
                    <div class="comments-area mt-0 scroll">
                        <h4 class="">05 Comments</h4>
                        
                        <?php if($coments) : 
                            foreach($coments as $v) : ?>

                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="desc">
                                        <h5><?= $v->user->username ?></h5>
                                        <p class="date"> <?= Yii::$app->formatter->asRelativeTime($v->created_at) ?> </p>
                                        <p class="comment">
                                        <?= $v->content ?>
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <?php endforeach; else : ?>
                            <h4 class="text-danger">
                                Not Message
                            </h4>
                        <?php endif; ?>

                    </div>
                    <div class="comment-form">
                        <h4>Your Coments</h4>
                        <?php $form = ActiveForm::begin(['action'=>Url::to(['/events/coment', 'id'=>$model['id']])]) ?>
                            <div class="form-group">
                                <?= $form->field($coment, 'content')->textarea(['placeholder'=>'Message'])->label(false); ?>
                            </div>
                            <?= Html::submitButton('Send', ['class'=>'primary-btn', 'style'=>'outline:none;border:none;']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>