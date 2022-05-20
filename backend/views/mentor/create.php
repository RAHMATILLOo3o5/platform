<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mentor */

$this->title = 'Create Mentor';
$this->params['breadcrumbs'][] = ['label' => 'Mentors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card p-3">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
