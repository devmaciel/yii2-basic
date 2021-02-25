<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

#GII por baixo (somente local)
// if (YII_ENV_DEV) {
//   $config['bootstrap'][] = 'gii';
//   $config['modules']['gii'] = [
//       'class' => 'yii\gii\Module',
//   ];
// }

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';


$config = require __DIR__ . '/../config/web.php';


(new yii\web\Application($config))->run();
