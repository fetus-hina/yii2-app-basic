<?php

declare(strict_types=1);

use yii\web\Application;

if (
    !in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true) ||
    file_exists(__DIR__ . '/../.production')
) {
    die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/test.php';

(new Application($config))->run();
