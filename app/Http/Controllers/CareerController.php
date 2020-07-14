<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class CareerController extends Controller
{
    public function store(Request $request)
    {
        
        $user = Auth::user();
        \App::setLocale($user->locale);
        
        return back()->withInput()->with('error', __('general.error_insert'));
    }
}
