<?php

namespace sevikon\introPlugin;

use yii\web\AssetBundle;

class IntroBowerAsset extends AssetBundle
{
    public $sourcePath = '@bower/intro.js/';

    public $js = [
        'minified/intro.min.js',
    ];
    public $css = [
        'minified/introjs.min.css',
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
