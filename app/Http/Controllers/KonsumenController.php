<?php

namespace App\Http\Controllers;

use App\Models\konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function index()
    {
        $konsumen = konsumen::with('user')->get();
        
        // return $destinations;
        return view('tampil', compact('konsumen'));
        
    }
}
