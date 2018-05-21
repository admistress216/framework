<?php
namespace yii\base;
use Yii;

abstract class Application extends Module
{
    public function __construct($config = [])
    {
        Yii::$app = $this;
        static::setInstance($this);
    }
}