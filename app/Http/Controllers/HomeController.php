<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
        $data = DB::table('car_images')->get();
        // return $data;
        return view('home'); 
    }

    public function Collection(){
        return view('pages.collection');
    }

    // public function faq
}
