<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\ControllerDoesNotReturnResponseException;

    class HelloController extends Controller
    {
        public function index() {
            return view('hello.index', ['message'=>'Hello!']);
        }
    }
    
