<?php
namespace sevikon\introPlugin;

use yii\base\Widget;

class IntroWidget extends Widget
{
    public $items=[];

    public function run()
    {
        $this->registerAssetBundle();
        return $this->render('@vendor/sevikon/yii2-intro-plugin/views/intro',['items'=>$this->items]);
    }

    private function registerAssetBundle(){
        $view = $this->getView();
        IntroBowerAsset::register($view);
    }
}