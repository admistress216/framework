<?php
namespace yii;

defined('YII_BEGIN_TIME') or define('YII_BEGIN_TIME', microtime(true));
defined('YII2_PATH') or define('YII2_PATH', __DIR__);
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');
defined('YII_ENV_PROD') or define('YII_ENV_PROD', YII_ENV === 'prod');
defined('YII_ENV_DEV') or define('YII_ENV_DEV', YII_ENV === 'dev');
defined('YII_ENV_TEST') or define('YII_ENV_TEST', YII_ENV === 'test');
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER', true);

class BaseYii
{
    public static $classMap = [];
    public static $container = [];

    public static function autoload($className)
    {
        if (isset(static::$classMap[$className])) {
            $classFile = static::$classMap[$className];
        } elseif (strpos($className, '\\') !== false){

        } else {
            return;
        }
        include $classFile;
    }
}