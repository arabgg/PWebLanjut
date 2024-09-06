<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSProductsController extends Controller
{
    public function dp() {
        return view('blog.daftarProduk');
    }
    public function fb() {
        return view('blog.fb');
    }
    public function bh() {
        return view('blog.bh');
    }
    public function hc() {
        return view('blog.hc');
    }
    public function bk() {
        return view('blog.bk');
    } 
}