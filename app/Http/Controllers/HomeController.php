<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Театр";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Театр";
        $viewData["subtitle"] = "О нас";
        $viewData["description"] = "Данный театр был основан в 1894 г. И он не утратил своё величие. Самым первым владельцем был Бан фон ген Гематоген.";
        $viewData["author"] = "Пробное";
        return view('home.about')->with("viewData", $viewData);
    }
}
