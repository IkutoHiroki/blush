<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index() {
        return view('practice/index');
    }

    public function board() {
        return view('practice/board');
    }
}