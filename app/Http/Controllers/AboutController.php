<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return 'Nama : Yoga Pradana<br> 
                NIM  : 234178021';
    }
}
