<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact() {
        $header = 'Nagłówek contact';
        $date = '20/02/2016';
        $visited = 3450;
        return view('pages.contact', compact('header', 'date', 'visited'));
    }
    
    public function about() {
        return view('pages.about');
    }
}
