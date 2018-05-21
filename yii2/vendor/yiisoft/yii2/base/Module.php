<?php
namespace yii\base;

class Module {
    public static function setInstance($instance) {
        if ($instance == null) {
            echo get_called_class();
        }
    }
}