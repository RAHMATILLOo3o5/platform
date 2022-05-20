<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/flaticon.css',
        'css/themify-icons.css',
        'vendors/owl-carousel/owl.carousel.min.css',
        'vendors/nice-select/css/nice-select.css',
        'css/style.css'
    ];
    public $js = [
        'js/popper.js',
        'vendors/nice-select/js/jquery.nice-select.min.js',
        'vendors/owl-carousel/owl.carousel.min.js',
        'js/owl-carousel-thumb.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/mail-script.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE',
        'js/gmaps.min.js',
        'js/theme.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
