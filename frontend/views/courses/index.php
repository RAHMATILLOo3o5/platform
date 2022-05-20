<?php

use common\models\Enroll;
use common\models\Like;
use frontend\models\Courses;
use yii\bootstrap4\LinkPager;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\helpers\VarDumper;

$user_id = (isset(Yii::$app->user->identity->id)) ? Yii::$app->user->identity->id : 0;
$this->title = "Courses";
?>
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Courses</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="about-us.html">Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->


<!--================Blog Area =================-->
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <?php if ($model) :
                        foreach ($model as $course) : ?>

                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">

                                        <ul class="blog_meta list">
                                            <li>
                                                <a href="#"><?= $course['mentor'] ?><i class="ti-user"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><?= date('d M, Y', $course['created_at']) ?><i class="ti-calendar"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><?= Enroll::find()->andWhere(['course_id' => $course['id']])->count() ?><i class="ti-medall-alt"></i></a>
                                            </li>
                                            <?php Pjax::begin(['id' => 'pjax_id']); ?>

                                            <li>
                                                <?= $this->render('_like', ['course' => $course]); ?>
                                            </li>

                                            <?php Pjax::end(); ?>
                                            <!-- <li>
                                                    <a href="#">06 Comments<i class="ti-comment"></i></a>
                                                </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?= Url::base() ?>/img/courses/<?= $course['poster_img'] ?>" alt="" />
                                        <div class="blog_details">
                                            <h2><?= $course['title_' . Yii::$app->language] ?></h2>
                                            <p>
                                                <?= $course['description_' . Yii::$app->language] ?>
                                            </p>
                                            <a data-method="post" href="<?= Url::to(['/courses/enroll', 'id' => $course['id']]) ?>" class="blog_btn">
                                                <?= Yii::t('app', 'Get started');?>
                                            </a>

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
                                    <img src="img/blog/main-blog/m-blog-2.jpg" alt="" />
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Basics Of Buying A Telescope</h2>
                                        </a>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors.
                                            Some people do not understand why you should have to
                                            spend money on boot camp when you can get the MCSE study
                                            materials yourself at a fraction.
                                        </p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                    <img src="img/blog/main-blog/m-blog-3.jpg" alt="" />
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Glossary Of Telescopes</h2>
                                        </a>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors.
                                            Some people do not understand why you should have to
                                            spend money on boot camp when you can get the MCSE study
                                            materials yourself at a fraction.
                                        </p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                    <img src="img/blog/main-blog/m-blog-4.jpg" alt="" />
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Night Sky</h2>
                                        </a>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors.
                                            Some people do not understand why you should have to
                                            spend money on boot camp when you can get the MCSE study
                                            materials yourself at a fraction.
                                        </p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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
                                    <img src="img/blog/main-blog/m-blog-5.jpg" alt="" />
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Telescopes 101</h2>
                                        </a>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors.
                                            Some people do not understand why you should have to
                                            spend money on boot camp when you can get the MCSE study
                                            materials yourself at a fraction.
                                        </p>
                                        <a href="single-blog.html" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                    <?php endif; ?>

                    <?= LinkPager::widget(
                        [
                            'pagination' => $pagination,
                            'prevPageLabel' => '<span aria-hidden="true"><i class="ti-angle-left"></i></span>',
                            'nextPageLabel' => '<span aria-hidden="true"><i class="ti-angle-right"></i></span>',
                            'options' => [
                                'class' => 'blog-pagination justify-content-center d-flex'
                            ]
                        ]
                    ) ?>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Categories" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="ti-search"></i>
                                </button>
                            </span>
                        </div>
                        <div class="br"></div>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <ul class="list cat-list">
                            <li>
                                <a href="<?= Url::to(['/courses/all']) ?>" class="
                                 <?= (Yii::$app->controller->route == 'courses/all' || Yii::$app->controller->route == 'courses/index') ? 'text-warning' : '' ?>
                                 d-flex justify-content-between 
                                ">
                                    <p><?= Yii::t('app', 'All') ?></p>
                                    <p>
                                        <?= Courses::find()->count() ?>
                                    </p>
                                </a>
                            </li>
                            <?php if ($categories) :

                                foreach ($categories as $category) :  ?>
                                    <li>
                                        <a href="<?= Url::to(['/courses/order', 'id'=>$category['id']]) ?>" 
                                        class=" 
                                        <?= (Yii::$app->request->url == '/courses/order?id='.$category['id']) ? 'text-warning' : '' ?>
                                        d-flex justify-content-between"
                                        >
                                            <p><?=  $category['title_' . Yii::$app->language]; ?></p>
                                            <p>
                                                <?= (isset($category['id'])) ? Courses::find()->where(['category_id' => $category['id']])->count() : '' ?>
                                            </p>
                                        </a>
                                    </li>

                                <?php endforeach;
                            else : ?>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================Blog Area =================-->