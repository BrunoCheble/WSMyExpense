<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/layout';
    public $css = [
        'css/bootstrap.css',
        'css/font-awesome.css',
        'style.css',
        'css/owl.carousel.css',
        'css/color.css',
        'css/dl-menu.css',
        'css/flexslider.css',
        'css/prettyphoto.css',
        'css/jquery-ui.css',
        'css/responsive.css'
    ];
    public $js = [
        'script/jquery.js',
        'script/modernizr.js',
        'script/jquery-ui.js',
        'script/bootstrap.min.js',
        'script/jquery.dlmenu.js',
        'script/flexslider-min.js',
        'script/jquery.prettyphoto.js',
        'script/waypoints-min.js',
        'script/owl.carousel.min.js',
        'script/jquery.countdown.min.js',
        'script/fitvideo.js',
        'script/skills.js',
        'script/markerclusterer.min.js',
        'script/jquery.ui.map.js',
        'script/functions.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
