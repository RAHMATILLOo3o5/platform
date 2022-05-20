<?php

use yii\helpers\Url;

$this->title = $title;
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


<section class="blog_area section_gap">
    <div class="container">
        <div class="row">


            <div class="col-lg-10">
                <div class="blog_left_sidebar">
                    <?php if ($events) : foreach ($events as $k) : ?>
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <!-- <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div> -->
                                        <ul class="blog_meta list">
                                            <!-- <li>
                                                <a href="#">Mark wiens<i class="ti-user"></i></a>
                                            </li> -->
                                            <li>
                                                <a><?= $k['date'] ?><i class="ti-calendar"></i></a>
                                            </li>
                                            <li>
                                                <a><?= $k['internal'] ?><i class="ti-time"></i></a>
                                            </li>
                                            <!-- <li>
                                                <a>06 Comments<i class="ti-comment"></i></a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?= Url::base() ?>/img/event/<?= $k['img'] ?>" alt="" />
                                        <div class="blog_details">
                                            <a href="<?= Url::to(['/events/view-event', 'id'=>$k['id']]) ?>">
                                                <h2><?= $k['title_'.Yii::$app->language] ?></h2>
                                            </a>
                                            <p>
                                               <?= $k['content_'.Yii::$app->language] ?>
                                            </p>
                                            <a href="<?= Url::to(['/events/view-event', 'id'=>$k['id']]) ?>" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach;
                    else : ?>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li>
                                            <a href="#">Mark wiens<i class="ti-user"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">12 Dec, 2017<i class="ti-calendar"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">1.2M Views<i class="ti-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">06 Comments<i class="ti-comment"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="<?=Url::base()?>/img/blog/main-blog/m-blog-1.jpg" alt="" />
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors.
                                            Some people do not understand why you should have to
                                            spend money on boot camp when you can get the MCSE study
                                            materials yourself at a fraction.
                                        </p>
                                        <a href="#" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>
                  
                </div>
            </div>
        </div>
    </div>
</section>