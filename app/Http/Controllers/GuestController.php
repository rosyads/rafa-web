<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view("guest.index", [
            'title' => 'Home'
        ]);
    }

    public function product(){
        return view("guest.products.index", [
            'title' => 'Product'
        ]);
    }

    public function about(){
        return view("guest.contents.about", [
            'title' => 'About Us'
        ]);
    }
}
