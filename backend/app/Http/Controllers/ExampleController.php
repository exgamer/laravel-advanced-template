<?php

namespace Backend\App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function test($name = "asdasd")
    {
        return view('example.index', [
            'name' => $name
        ]);
    }
}
