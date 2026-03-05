<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /* $data = [
            'nama' => 'Budi',
            'pekerjaan' => 'Chef',
        ];
        return view('home')->with($data);
        */
        $nama = "Andreas";
        $pekerjaan = "Bartender";
        return view('home', compact('nama', 'pekerjaan'));
    }
    public function contact()
    {
        return view('contact');
    }
}
