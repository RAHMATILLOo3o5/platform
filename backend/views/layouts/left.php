<?php

use yii\helpers\Url;
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= Url::base()?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Url::base()?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= Url::to(['/site/profile']) ?>" class="d-block"><?= (isset(Yii::$app->user->identity->username)) ? Yii::$app->user->identity->username : '' ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item <?= (Yii::$app->controller->route == 'site/index') ? 'menu-open' : '' ?> ">
                    <a href="#" class="nav-link <?= (Yii::$app->controller->route == 'site/index') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['/site/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'site/index') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/contact/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'contact/index') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Contact
                            <span class="right badge badge-primary">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Courses
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['/ccategory/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'ccategory/index') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::to(['/courses/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'courses/index') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::to(['/user/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'user/index') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <!-- <span class="right badge badge-primary">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/chats/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'chats/index') ? 'active' : '' ?>">
                        <i class="nav-icon far fa-comments"></i>
                        <p>
                            Live Chats
                            <span class="right badge badge-danger">Live</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= (Yii::$app->controller->route == 'enventcaty/index' || Yii::$app->controller->route == 'events/index') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Events
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['/events/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'events/index') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/mentor/index']) ?>" class="nav-link <?= (Yii::$app->controller->route == 'mentor/index') ? 'active' : '' ?>">
                        <i class="nav-icon far fa-comments"></i>
                        <p>
                            Mentors
                            <!-- <span class="right badge badge-danger">Live</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/auth-item/index']) ?>" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Ishlar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['/auth-item/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ishlar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::to(['/workes/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ishchilar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            About setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::to(['/about/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::to(['/about/create']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add about</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>