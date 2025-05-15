<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function view(){
        $owner = Owner::first();
        return view('dashboard.view', ['owner' => $owner]);
    }
}
