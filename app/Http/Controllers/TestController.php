<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function index2(string $id) {
        return view('welcome', ['name' => $id]);
    }
}
