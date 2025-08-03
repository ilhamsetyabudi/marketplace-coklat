<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chocolate;

class PageController extends Controller
{
    // Method untuk menampilkan halaman utama (company profile)
    public function home()
    {
        return view('home'); // Akan menampilkan file home.blade.php
    }

    // Method untuk menampilkan halaman belanja
    public function belanja()
    {
        // Ambil semua data coklat dari database
        $chocolates = Chocolate::all();

        // Kirim data tersebut ke view 'belanja'
        return view('belanja', [
            'chocolates' => $chocolates
        ]);
    }
}
