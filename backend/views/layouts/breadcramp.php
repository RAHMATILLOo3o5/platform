<?php
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Url;

echo Breadcrumbs::widget(
    [
        'tag'=>'ol',
        'options'=>[
            'class'=>'breadcrumb float-sm-right',
        ],
        'itemTemplate'=>'<li class"breadcrumb-item active">{link} / </li>',
        'homeLink'=>[
            'label'=>'Home',
            'url'=>Url::home(),
            'encode'=>false,
            'class'=>'breadcrumb-item'
        ],
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]
)

?>
