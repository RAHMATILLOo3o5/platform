<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'About';
?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2><?= Yii::t('app', 'about') ?></h2>
                        <div class="page_link">
                            <a href="index.html"><?= Yii::t('app', 'home') ?></a>
                            <a href="about-us.html"><?= Yii::t('app', 'about') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="row h_blog_item">
            <div class="col-lg-6">
                <div class="h_blog_img">
                    <img class="img-fluid" src="<?=Url::base()?>/img/about.png" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h_blog_text">
                    <div class="h_blog_text_inner left right">
                        <h4>Welcome to our Institute</h4>
                        <p>
                            Subdue whales void god which living don't midst lesser
                            yielding over lights whose. Cattle greater brought sixth fly
                            den dry good tree isn't seed stars were.
                        </p>
                        <p>
                            Subdue whales void god which living don't midst lesser yieldi
                            over lights whose. Cattle greater brought sixth fly den dry
                            good tree isn't seed stars were the boring.
                        </p>
                        <a class="primary-btn" href="#">
                            Learn More <i class="ti-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Area =================-->

<!--================ Start Feature Area =================-->
<section class="feature_area section_gap_top title-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 text-white"><?= Yii::t('app', 'aw') ?></h2>
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