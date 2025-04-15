<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    // вывод одного объявления
    public function index($id)
    {
        return 'index one ad - ' . 'id: ' . $id;
    }

    // вывод списка объявления
    public function list()
    {
        return 'list ard';
    }
}
