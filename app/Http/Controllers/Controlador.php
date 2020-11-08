<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    function ValidarSesion(Request $Request) {
        $user = $Request -> input('user');
        $pass = $Request -> input('pass');

        return view('index');
    }

    function Sesion() {

        return view('sesion');
    }

    function Index() {
        return view('index');
    }

    function Pablo() {
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
