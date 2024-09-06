<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSUserController extends Controller
{
    public function user($id, $nama = null) {
        return view('blog.user')
                ->with('id', $id)
                ->with('nama', $nama);
    }
}