<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // для главной страницы
    public function index()
    {
        return 'home';
    }
}
