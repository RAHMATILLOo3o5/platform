<?php

use yii\helpers\Url;

$lan = Yii::$app->params['languages'];
?>
<!--================ Start Header Menu Area =================-->
<header class="header_area <?= (Yii::$app->controller->route !== 'site/index') ? 'white-header' : ''; ?> ">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="<?= Yii::t('app', 'srch'); ?>" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= Url::to(['/site/index']) ?>"><img src=" 
                 <?= (Yii::$app->controller->route !== 'site/index') ? 'img/logo2.png' : 'img/logo.png'; ?>" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?= (Yii::$app->controller->route == 'site/index') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= Url::to(['/site/index']) ?>"><?= Yii::t('app', 'home'); ?></a>
                        </li>
                        <li class="nav-item <?= (Yii::$app->controller->route == 'site/about') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= Url::to(['/site/about']) ?>"><?= Yii::t('app', 'about'); ?></a>
                        </li>
                        <li class="nav-item <?= (Yii::$app->controller->route == 'courses/index') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= Url::to(['/courses/index']) ?>">Courses</a>
                        </li>
                       
                        <li class="nav-item <?= (Yii::$app->controller->route == 'site/contact') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= Url::to(['/site/contact']) ?>"><?= Yii::t('app', 'contact'); ?></a>
                        </li>


                        <?php if (Yii::$app->user->isGuest) : ?>
                            <li class="nav-item <?= (Yii::$app->controller->route == 'site/login') ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= Url::to(['/site/login']) ?>"><?= Yii::t('app', 'login'); ?></a>
                            </li>
                            <li class="nav-item <?= (Yii::$app->controller->route == 'site/signup') ? 'active' : ''; ?>">
                                <a class=" mt-3 genric-btn primary" href="<?= Url::to(['/site/signup']) ?>"><?= Yii::t('app', 'sign'); ?></a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?= Yii::$app->user->identity->username ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= Url::to(['/courses/enroll-courses']) ?>">Your courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= Url::to(['/site/setting', 'id'=>Yii::$app->user->id]) ?>">Setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" data-method="post" href="<?= Url::to(['/site/logout']) ?>">Log out</a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>


                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $lan[Yii::$app->language] ?></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($lan as $k => $v) : ?>
                                    <li class="nav-item">
                                        <a href="<?= Url::to(['/site/change-lang', 'lan' => $k]) ?>" class="nav-link"><?= $v ?></a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link search" style="cursor: pointer;" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>