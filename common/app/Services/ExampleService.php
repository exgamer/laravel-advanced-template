<?php
namespace Common\App\Services;

use Common\App\Services\Base\Service;

class ExampleService extends Service
{
    public $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function go()
    {
        return $this->testService->go();
    }


    public function apiArray()
    {
        return ['data1', 'data2', 'data3'];
    }
}