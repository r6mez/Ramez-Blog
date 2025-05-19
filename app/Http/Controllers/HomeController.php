<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        $owner = Owner::first();
        $socials = Social::all();
        return view('home', compact('owner', 'socials'));
    }
}
