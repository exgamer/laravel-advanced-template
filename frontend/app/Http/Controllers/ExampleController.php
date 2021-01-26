<?php

namespace Frontend\App\Http\Controllers;

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

    //

    public function test($name = "asdasd")
    {
//        dump(base_path());
//        dump(config('app'));
//        dump(config('main'));
//        dump($this->exampleService->go());
        return view('example.index', [
            'name' => $this->exampleService->go()
        ]);
    }
}
