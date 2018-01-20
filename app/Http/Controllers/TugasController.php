<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class TugasController extends Controller
{
    public function bou()
    {
    $c=Mahasiswa::all();        
    return view('data',compact('c'));
    }
}
