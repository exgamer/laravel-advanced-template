<?php

namespace Api\App\Http\Controllers;

use Common\App\Services\ExampleService;

class ExampleController extends Controller
{
    public $exampleService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    public function index()
    {

        $array = $this->exampleService->apiArray();

        return response()->json($array);
    }
}
