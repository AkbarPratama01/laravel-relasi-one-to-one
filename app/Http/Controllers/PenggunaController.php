<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
class PenggunaController extends Controller
{
    public function index()
    {
        $data_pengguna = Pengguna::all();
        return view('pengguna', compact('data_pengguna'));
    }
}
