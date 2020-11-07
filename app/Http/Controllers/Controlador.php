<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    function index() {
        return view('index');
    }

    function pablo() {
        return view('Pablo');
    }

    function VanGogh() {
        return view('VanGogh');
    }

    function Diego() {
        return view('Diego');
    }

    function Leonardo() {
        return view('Leonardo');
    }

    function Velazquez() {
        return view('Velazquez');
    }
}
