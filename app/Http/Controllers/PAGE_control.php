<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PAGE_control extends Controller
{
    public function home(){
        return view('awal');
    }
}
