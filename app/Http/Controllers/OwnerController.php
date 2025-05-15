<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function update(Request $request){
        $currOwner = Owner::first();
        $currOwner->update($request->all());
        return redirect()->route('dashboard')->with("status", "owner-updated");
    }
}
