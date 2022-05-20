<?php

use yii\helpers\Url;
use common\models\Contact;

$data = new Contact();
$count = count($data::findAll(['status' => 0]));
$messages = $data::find()->andWhere(['status' => 0])->orderBy(['created_at' => SORT_DESC])->limit(5)->all();
?>


<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= Url::home() ?>" class="nav-link <?= (Yii::$app->controller->route == 'site/index') ? 'active' : "" ?>">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= Url::to(['/contact/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'contact/index') ? 'active' : "" ?>">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <?= ($count !== 0) ?  "<span class='badge badge-danger navbar-badge'> $count</span>" : '' ?>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <?php if ($messages) :
                    foreach ($messages as $k) : ?>
                        <a href="<?= Url::to(['/contact/view', 'id'=>$k->id]) ?>" class="dropdown-item">
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <?= $k->name ?>
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm"><?= $k->subject ?></p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?= Yii::$app->formatter->asRelativeTime($k->created_at); ?></p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                    <?php endforeach;

                    echo  "<a href='".Url::to(['/contact/index'])."' class='dropdown-item dropdown-footer'> See All Messages</a>";

                else : ?>
                    <a href="#" class="dropdown-item dropdown-footer text-danger"> No Messages</a>
                <?php endif; ?>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="<?= Url::to(['/gii']) ?>" class="dropdown-item">
                    <i class="fas fa-arrow-tools"></i> Gii
                </a>
                <a href="<?= Url::to(['/site/profile', 'id'=>Yii::$app->user->identity->id]) ?>" class="dropdown-item">
                <i class="fa fa-gears"></i> Account settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= Url::to(['/site/logout']) ?>" data-method="post" class="dropdown-item text-danger">
                    <i class="fas fa-arrow-left"></i> Logout
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->