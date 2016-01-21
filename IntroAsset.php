<?php

namespace sevikon\introPlugin;

use yii\web\AssetBundle;

class IntroAsset extends AssetBundle
{
//    public $sourcePath = '@vendor/bower/yii2-ajax-search/assets/SearchAsset';
    public $sourcePath = '@vendor/sevikon/yii2-intro-plugin/assets';
//    public $sourcePath = '@vendor/bower/intro.js/minified/';
//    public $basePath = '@vendor/bower/intro.js/minified/';

    public $js = [
//        'intro.min.js',
    ];
    public $css = [
//        'intro.min.css',
    ];
    public function init()
    {
//        $this->js[] = $this->bowerPath.'';
//        if (!YII_DEBUG){
//            $this->css = ['https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.1/animate.min.css'];
//        }
        parent::init();
    }
}
