<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use backend\assets\LoginAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

AppAsset::register($this);
LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

    
    <body class="hold-transition sidebar-mini layout-fixed">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <?= $this->render('header') ?>
            <?= $this->render('left') ?>
            
            <?= Alert::widget([
                'options' => ['class' => 'toasts-top-right fixed']
                ]) ?>
        <div class="content-wrapper">
            <div class="content">
                <?= $this->render('title') ?>
                <?= $content ?>
            </div>
        </div>
        
        <?= $this->render('footer') ?>
    </div>
    
    <?php $this->endBody() ?>
</body>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


</html>
<?php $this->endPage();
