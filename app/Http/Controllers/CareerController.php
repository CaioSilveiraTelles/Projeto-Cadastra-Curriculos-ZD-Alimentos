<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Career;
class CareerController extends Controller
{
    public function store(Request $request)
    {//dd($request);
        $user = Auth::user();
        \App::setLocale($user->locale);
        $career = (is_null($request->career_id)) ? new Career() : Career::findOrFail($request->career_id);
        $career->begin = '01/'.$request->begin;
        $career->company = $request->company;
        $career->role = $request->role;
        $career->country = $request->country;
        $career->state = $request->state;
        $career->city = $request->city;
        $career->responsabilities = $request->responsabilities;
        $career->resume_id = $request->resume_id;
        $career->end = null;
        if(!is_null($request->end))
            $career->end = '01/'.$request->end;
        if($career->save())
            return redirect()->route('resume.edit', ['id' => $career->resume_id, '#career_section']);
        return back()->withInput()->with('error', __('general.error_insert'));
    }
    public function edit($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $career = Career::findOrFail($id);
        return response()->json($career);
    }

    public function destroy($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('resume.edit', ['id' => $career->resume_id, '#career_section']);
    }
}
