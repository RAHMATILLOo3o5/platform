<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */

$this->title = Yii::t('app', 'Create Events');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-8 offset-2">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>