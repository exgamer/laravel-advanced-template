<?php

namespace Common\App\Providers;

use Common\App\Providers\Base\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    /**
     * Группа сервисов провайдера
     * ключ сервисов из основного конфига сервисов
     *
     * @var string
     */
    protected $servicesGroup = 'common';

    /**
     * Возвращает путь до конфига сервисов
     *
     * @return string
     */
    function getServicesConfigPath()
    {
        return __DIR__.'/../../config/services/main.php';
    }
}
