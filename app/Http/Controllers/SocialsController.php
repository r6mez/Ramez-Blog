<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialsController extends Controller
{
    public function add(Request $request)
    {
        $iconPath = $request->file('icon')->store('social_icons', 'public');

        $social = new \App\Models\Social();
        $social->name = $request->input('name');
        $social->link = $request->input('link');
        $social->icon = $iconPath;
        $social->save();

        return redirect()->back()->with('success', 'Social link added successfully!');
    }

    public function destroy($id)
    {
        $social = \App\Models\Social::findOrFail($id);
        if ($social->icon && Storage::disk('public')->exists($social->icon)) {
            Storage::disk('public')->delete($social->icon);
        }
        $social->delete();
        return redirect()->back()->with('success', 'Social link deleted successfully!');
    }
}
