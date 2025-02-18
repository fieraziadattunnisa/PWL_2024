<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metode untuk route /index
    public function selamatDatang()
    {
        return 'Selamat Datang';
    }

    // Metode untuk route /about
    public function about()
    {
        return 'NIM: 2341720220, Nama: Fiera Ziadattun Nisa';
    }

    // Metode untuk route /articles/{id}
    public function articles($id)
    {
        return "Halaman Artikel dengan ID $id";
    }
}
