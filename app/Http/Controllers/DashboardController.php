<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Social;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function view()
    {
        $owner = Owner::first();
        $socials = Social::all();
        return view('dashboard.view', compact('owner', 'socials'));
    }
}
