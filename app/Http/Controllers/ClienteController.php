<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function index() {
        return view('site.app.home');
    }
}
