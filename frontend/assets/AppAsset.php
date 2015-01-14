<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/flat-ui.css',
        'css/likevery.css',
        'css/media.css',
    ];
    public $js = [
        'js/jquery-1.8.3.min.js',
        'js/jquery-ui-1.10.3.custom.min.js',
        'js/jquery.ui.touch-punch.min.js',
        'js/bootstrap.min.js',
        'js/bootstrap-select.js',
        'js/bootstrap-switch.js',
        'js/flatui-checkbox.js',
        'js/flatui-radio.js',
        'js/jquery.tagsinput.js',
        'js/jquery.placeholder.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
