<?php

/** @var yii\web\View $this */

use common\models\Enroll;
use common\models\Like;
use frontend\models\Ccategory;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = 'Edustage';
$user_id = (isset(Yii::$app->user->identity->id)) ? Yii::$app->user->identity->id : 0;


?>

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            <?= Yii::t('app', 'banner_title'); ?>
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            <?= Yii::t('app', 'banner_title_2'); ?>
                        </h2>
                        <div>
                            <a href="<?= Url::to(['/site/about']) ?>" class="primary-btn2 mb-3 mb-sm-0"><?= Yii::t('app', 'b_btn_1'); ?></a>
                            <a href="<?= Url::to(['/courses/index']) ?>" class="primary-btn ml-sm-3 ml-0"><?= Yii::t('app', 'b_btn_2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->
<section class="feature_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3"><?= Yii::t('app', 'aw') ?></h2>
                    <p>
                        <?= Yii::t('app', 'subtitle') ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if ($about) : foreach ($about as $s) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature">
                            <div class="icon"><span class="<?= $s['icon'] ?>"></span></div>
                            <div class="desc">
                                <h4 class="mt-3 mb-2"><?= $s['title_' . Yii::$app->language] ?></h4>
                                <p><?= $s['content_' . Yii::$app->language] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            else : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Sell Online Course</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great
                                heaven
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-earth"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Global Certification</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great
                                heaven
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--================ End Feature Area =================-->

<!--================ Start Popular Courses Area =================-->
<div class="popular_courses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3"><?= Yii::t('app', 'courses') ?></h2>
                    <p>
                        <?= Yii::t('app', 'co_tit') ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single course -->
            <div class="col-lg-12">
                <div class="owl-carousel active_course">
                    <?php if ($courses) : foreach ($courses as $r) : ?>
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="<?= Url::base() . '/img/courses/' . $r['poster_img'] ?>" alt="" />
                                </div>
                                <div class="course_content">
                                    <span class="price">$ <?= $r['price'] ?></span>
                                    <span class="tag mb-4 d-inline-block"><?= Ccategory::findOne($r['category_id'])->title_en ?></span>
                                    <h4 class="mb-3">
                                        <a href=""><?= $r['title_' . Yii::$app->language] ?></a>
                                    </h4>
                                    <p>
                                        <?= $r['description_' . Yii::$app->language] ?>
                                    </p>
                                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                        <div class="authr_meta">
                                            <img src="<?= Url::base() ?>/img/courses/author1.png" alt="" />
                                            <span class="d-inline-block ml-2"><?= $r['mentor'] ?></span>
                                        </div>
                                        <?php Pjax::begin(['id' => 'pjax']) ?>

                                        <div class="mt-lg-0 mt-3 ml-1">
                                            <span class="meta_info ml-2">
                                                <span> <i class="ti-user mr-2"></i>
                                                    <?= Enroll::find()->andWhere(['course_id' => $r['id']])->count() ?>
                                                </span>
                                                <span class="meta_info ml-2">
                                                    <i class="ti-heart mr-2"></i>
                                                    <?= Like::find()->andWhere(['course_id' => $r['id']])->count() ?>
                                                </span>
                                            </span>

                                        </div>
                                        <?php Pjax::end(); ?>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    else :  ?>
                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="<?=Url::base()?>/img/courses/c2.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">$25</span>
                                <span class="tag mb-4 d-inline-block">design</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Social Media Network</a>
                                </h4>
                                <p>
                                    One make creepeth man bearing their one firmament won't fowl
                                    meat over sea
                                </p>
                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                        <img src="img/courses/author2.png" alt="" />
                                        <span class="d-inline-block ml-2">Cameron</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                        </span>
                                        <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="<?=Url::base()?>/img/courses/c3.jpg" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">$25</span>
                                <span class="tag mb-4 d-inline-block">design</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">Computer Engineering</a>
                                </h4>
                                <p>
                                    One make creepeth man bearing their one firmament won't fowl
                                    meat over sea
                                </p>
                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                        <img src="img/courses/author3.png" alt="" />
                                        <span class="d-inline-block ml-2">Cameron</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                        </span>
                                        <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
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

<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Our Expert Trainers</h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <?php if ($mentor) : foreach ($mentor as $f) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                        <div class="thumb d-flex justify-content-sm-center">
                            <img class="img-fluid" src="<?=Url::base()?>/img/trainer/<?= $f->img ?>" alt="" />
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4><?= $f->name ?></h4>
                            <p class="designation"><?= $f->job ?></p>
                            <div class="mb-4">
                                <p>
                                    <?= $f->description ?>
                                </p>
                            </div>
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            else :  ?>
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="<?=Url::base()?>/img/trainer/t2.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>David Cameron</h4>
                        <p class="designation">Sr. web designer</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="<?=Url::base()?>/img/trainer/t3.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Jain Redmel</h4>
                        <p class="designation">Sr. Faculty Data Science</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="<?=Url::base()?>/img/trainer/t4.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Nathan Macken</h4>
                        <p class="designation">Sr. web designer</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
<!--================ End Trainers Area =================-->

<!--================ Start Events Area =================-->
<div class="events_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 text-white"><?= Yii::t('app', 'upc') ?></h2>
                    <p>
                        <?= Yii::t('app', 'upc_st'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php if ($events) :
                foreach ($events as $k) : ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_event position-relative">
                            <div class="event_thumb">
                                <img src="<?= Url::base() ?>/img/event/<?= $k['img'] ?>" alt="" />
                            </div>
                            <div class="event_details">
                                <div class="d-flex mb-4">
                                    <div class="date"><?= $k['date'] ?></div>

                                    <div class="time-location">
                                        <p>
                                            <span class="ti-time mr-2"></span> <?= $k['internal'] ?>
                                        </p>
                                        <p>
                                            <span class="ti-location-pin mr-2"></span> <?= $k['location'] ?>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    <?= $k['title_' . Yii::$app->language] ?>
                                </p>
                                <a href="<?= Url::to(['/events/view-event', 'id' => $k['id']]) ?>" class="primary-btn rounded-0 mt-3"><?= Yii::t('app', 'btn_view') ?></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            else : ?>

                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="<?=Url::base()?>/img/event/e2.jpg" alt="" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <div class="date"><span>15</span> Jun</div>

                                <div class="time-location">
                                    <p>
                                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                    </p>
                                    <p>
                                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                    </p>
                                </div>
                            </div>
                            <p>
                                One make creepeth man for so bearing their firmament won't
                                fowl meat over seas great
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="<?=Url::base()?>/img/event/e1.jpg" alt="" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <div class="date"><span>15</span> Jun</div>

                                <div class="time-location">
                                    <p>
                                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                    </p>
                                    <p>
                                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                    </p>
                                </div>
                            </div>
                            <p>
                                One make creepeth man for so bearing their firmament won't
                                fowl meat over seas great
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
            <div class="col-lg-12">
                <div class="text-center pt-lg-5 pt-3">
                    <a href="<?= Url::to(['/events/index']) ?>" class="event-link">
                        <?= Yii::t('app', 'btn_view_all') ?> <img src="img/next.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Events Area =================-->

<!--================ Start Testimonial Area =================-->
<div class="testimonial_area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Client say about me</h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="testi_slider owl-carousel">
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Elite Martin</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Davil Saden</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Elite Martin</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Davil Saden</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Elite Martin</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <img src="<?=Url::base()?>/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Davil Saden</h4>
                                <p>
                                    Him, made can't called over won't there on divide there
                                    male fish beast own his day third seed sixth seas unto.
                                    Saw from
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ End Testimonial Area =================-->