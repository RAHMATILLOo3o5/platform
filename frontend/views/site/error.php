<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
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
                            <a><?= $this->title ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact_area section_gap">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>
            <a href="<?= Url::home() ?>" class="btn btn-warning btn-block"><?= Yii::t('app', 'Go Back') ?></a>
        </div>
    </div>
</div>


<div id="tsparticles"></div>