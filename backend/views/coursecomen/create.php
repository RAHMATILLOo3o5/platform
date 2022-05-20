<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Coursecoment */

$this->title = 'Create Coursecoment';
$this->params['breadcrumbs'][] = ['label' => 'Coursecoments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coursecoment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
