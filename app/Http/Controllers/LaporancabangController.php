<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporancabangController extends Controller
{
    
    public function laporancabang()
    {
        return view('laporancabang');
    }

    public function showlaporan(){

        $datalaporan= laporan::all();
        return view('laporancabang',compact('datalaporan'));
    }
}
