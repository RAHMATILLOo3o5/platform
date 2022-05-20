<?php

use yii\helpers\Html;
use yii\helpers\Url;


// VarDumper::dump($model, $depth = 10, $highlight = true);
$this->title = "Setting | ".$model->username ;
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


<section class="contact_area section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center"><?= $model->username ?></h3>


                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Username</b> <a class="float-right"><?= $model->username ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?= $model->email ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Was created</b> <a class="float-right"><?= Yii::$app->formatter->asRelativeTime($model->created_at) ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Last update time</b> <a class="float-right"><?= Yii::$app->formatter->asRelativeTime($model->updated_at) ?></a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="row my-md-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#login" data-toggle="tab">Login setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">Password setting</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content ">
                            <div class="active tab-pane" id="login">

                                <form action="<?= Url::to(['/site/setting', 'id' => $model->id]) ?>" method="post">
                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" id="inputName" class="form-control" value="<?= $model->username ?>">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <?= Html::submitButton('Updated', ['class' => 'primary-btn rounded-0']) ?>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" action="<?= Url::to(['/site/password', 'id' => $model->id]) ?>" method="post">
                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">New password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="password" id="inputName" placeholder="New password" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Confirm password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputEmail" placeholder="Confirm password" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                        <?= Html::submitButton('Updated', ['class' => 'primary-btn rounded-0 ']) ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>