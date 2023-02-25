<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        return 'Selamat Datang';
    }

    function about(){
        return '2141720005 || Sely Ruli Amanda';
    }

    function articles($id){
        return 'Halaman Artikel Dengan ID ' . $id;
    }
}
