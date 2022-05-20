<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */

$this->title = 'Update Courses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card p-3">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
