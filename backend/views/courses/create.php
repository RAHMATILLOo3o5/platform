<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */

$this->title = 'Add Courses';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card p-3">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
