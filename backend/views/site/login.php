<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>
<div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
</div>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <div class="input-group mb-3">
            <?= $form->field($model, 'username', ['options'=>['tag'=>false]])->textInput(['autofocus' => true])->label(false) ?>


<!--            <input type="email" class="form-control" placeholder="Email">-->
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <?= $form->field($model, 'password', ['options'=>['tag'=>false]])->passwordInput()->label(false) ?>

<!--                <input type="password" class="form-control" placeholder="Password">-->
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>
            <?php ActiveForm::end(); ?>


    </div>
    <!-- /.login-card-body -->
</div>