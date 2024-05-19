<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $homes = Home::latest()->take(4)->get();
        return view('admin')->with('homes', $homes);
    }
}
