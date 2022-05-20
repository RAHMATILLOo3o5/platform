<?php

use kartik\form\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = $model['title_' . Yii::$app->language];
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
                            <a href="<?= Url::home() ?>"><?= Yii::t('app', 'home'); ?></a>
                            <a href="<?= Url::to(['/courses/index']) ?>">Courses</a>
                            <a href="#">Courses Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="course_details_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 course_details_left">
                <div class="main_image">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $model['videolink'] ?>"></iframe>
                    </div>
                </div>
                <div class="content_wrapper">
                    <h4 class="title"><?= $model['title_' . Yii::$app->language] ?></h4>
                    <div class="content">
                        <?= $model['description_' . Yii::$app->language] ?>
                    </div>

                    <h4 class="title">About Course</h4>
                    <div class="content right-contents">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer's Name</p>
                                    <span class="or"><?= $model['mentor'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee</p>
                                    <span>$<?= $model['price'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p><i class="ti-user"></i> Pupils</p>
                                    <span><?= $pupils ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p><i class="ti-heart"></i> Like </p>
                                    <span><?= $likes ?></span>
                                </a>
                            </li>
                        </ul>
                        <h4 class="title">Coments</h4>

                        <div class="content">
                            <div class="feedeback">
                                <h6>Your Coment</h6>
                                <?php $form = ActiveForm::begin(['action' => Url::to(['/courses/coment', 'id' => $model['id']])]) ?>
                                <?= $form->field($coment, 'content')->textarea()->label(false) ?>
                                <div class="mt-10 text-right">
                                    <?= Html::submitButton('Submit', ['class' => 'genric-btn info circle']) ?>
                                </div>
                                <?php ActiveForm::end();; ?>
                            </div>
                            <div class="comments-area mb-30">
                                <?php if ($coments) :
                                    foreach ($coments as $c) : ?>
                                        <div class="comment-list">
                                            <div class="single-comment single-reviews justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <h4 class="title_color"><?= $c->user->username ?></h4>
                                                    <div class="section-top-border">
                                                        <sub class="text-sm">
                                                            <?= Yii::$app->formatter->asRelativeTime($c->created_at) ?>
                                                        </sub>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <blockquote class="mt-0  generic-blockquote">
                                                                    <?= $c->content ?>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                else : ?>
                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">

                                                <div class="desc">
                                                    <h5>
                                                        <a>Emilly Blunt</a>
                                                    </h5>
                                                    <p class="comment">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                        elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 right-contents">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">O'xshashlar</h3>
                        <?php if ($alike) :
                            foreach ($alike as $l) : ?>
                                <div class="media post_item">
                                    <div class="embed-responsive embed-responsive-1by1 w-25 h-25">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $l['videolink'] ?>" allowfullscreen></iframe>
                                    </div>
                                    <div class="media-body">
                                        <a href="<?= Url::to(['/courses/view-course', 'id'=>$l['id']]) ?>">
                                            <h4><?= $l['title_'.Yii::$app->language] ?></h4>
                                        </a>
                                        <p><?= Yii::$app->formatter->asRelativeTime($l['created_at']) ?></p>
                                    </div>
                                </div>

                            <?php endforeach;
                        else : ?>
                            <div class="media post_item">
                                <div class="embed-responsive embed-responsive-1by1 w-25 h-25">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pHI8ot7mg5A" allowfullscreen></iframe>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h4>Asteroids telescope</h4>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="br"></div>
                    </aside>

                </div>

            </div>
        </div>
    </div>
</section>