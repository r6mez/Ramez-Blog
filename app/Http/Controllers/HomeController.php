<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        $owner = Owner::first();
        return view('home', ['owner' => $owner]);
    }
}
