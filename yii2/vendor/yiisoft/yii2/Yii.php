<?php
/**
 * yii工具类
 */
require __DIR__ . '/BaseYii.php';

class Yii extends \yii\BaseYii
{
}
spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require __DIR__ . '/classes.php';
Yii::$container = new yii\di\Container();
