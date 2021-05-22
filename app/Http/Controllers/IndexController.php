<?php

namespace App\Http\Controllers;


class IndexController extends Controller
{

    public function index() {
        $name = "Vasyatka";
        $age = 22;
        return view('index', compact(['name', 'age']));
    }

    public function about() {
        return view('about');
    }

//    public function contact() {
//        $res = new PageController();
//        $res->show();
//    }

}