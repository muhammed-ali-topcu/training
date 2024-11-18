<?php

namespace App\Http\Controllers;

use App\Services\FactoryDesignPattern\Service;
use Illuminate\Http\Request;

class FactoryDesingPatternController extends Controller
{


    private Service $service;
    function __construct()
    {
       $this->service = new Service();

    }
    public function __invoke(Request $request)
    {

        $this->service->run();



    }
}
