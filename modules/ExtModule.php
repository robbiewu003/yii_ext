<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 2018/12/3
 * Time: 11:43
 */

namespace myext\modules;

class ExtModule extends \yii\base\Module{

    public $controllerNamespace = 'app\modules\ext\controllers';

    public function init()
    {
        parent::init();


        // custom initialization code goes here
    }
}