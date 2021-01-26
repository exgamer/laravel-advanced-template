<?php

if (file_exists($configPath = __DIR__.'/../../common/config/main.php')) {
    $commonConfig = require $configPath;
}

$appConfig = [
    'lang' => 'ru'
];

return array_merge($commonConfig, $appConfig);