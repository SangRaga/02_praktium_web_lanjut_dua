<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about()
    {
        return "Sang Raga Rasendriya Wirawan : 2141720240";
    }

    public function article($id)
    {
        return "Halaman Artikel dengan ID $id";
    }
    //
}