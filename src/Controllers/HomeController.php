<?php

namespace MyPackage\TestPackage\Controllers;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return "Hello There. This is test package.";
    }
}