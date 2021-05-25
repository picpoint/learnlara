<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index() {
        $name = 'Vasya';
        $age = 44;
        $enginer = true;
        return view('index', compact('name', 'age', 'enginer'));
    }

}