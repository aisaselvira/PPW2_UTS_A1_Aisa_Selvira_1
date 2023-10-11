<?php

namespace App\Http\Controllers;

use App\Models\Pemain;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = Pemain::all()->sortByDesc('id');
        $no = 0;
        $hitung = Pemain::count();
        return view('pemain.index', compact('data_pemain', 'no', 'hitung'));

    }

}