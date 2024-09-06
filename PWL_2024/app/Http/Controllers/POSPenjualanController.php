<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSPenjualanController extends Controller
{
    public function penjualan() {
        return view('blog.penjualan');
    }
}