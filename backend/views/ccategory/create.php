<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ccategory */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card p-3">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
