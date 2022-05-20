<?php

use frontend\models\Courses;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$this->title = "The courses you are studying";
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
                            <a href="#"><?= $this->title ?></a>
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
            <div class="col-lg-10 offset-lg-2">
                <div class="blog_left_sidebar">
                    <?php  if($enroll) : 
                        foreach($enroll as $r) : 
                        $course = Courses::find()->andWhere(['id'=>$r->course_id])->asArray()->all();
                         $i = 0; ?>
                    <article class="row blog_item">
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?= Url::base() ?>/img/courses/<?= $course[$i]['poster_img'] ?>" alt="" />
                                <div class="blog_details">
                                    <h2><?= $course[$i]['title_' . Yii::$app->language] ?></h2>
                                    <p>
                                        <?= $course[$i]['description_' . Yii::$app->language] ?>
                                    </p>
                                    <a data-method="post" href="<?= Url::to(['/courses/enroll', 'id' => $course[$i]['id']]) ?>" class="blog_btn">
                                        <?= Yii::t('app', 'Get started'); ?>
                                    </a>

                                </div>
                            </div>
                        </div>


                    </article>
                    <?php endforeach; else : ?>
                    <article class="row blog_item">
                        <div class="col-md-9">
                            <div class="blog_post">
                                <h2 class="text-danger"><?= Yii::t('app', 'No courses found'); ?></h2>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>