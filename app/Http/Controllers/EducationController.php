<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use Auth;
class EducationController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $education = (is_null($request->education_id)) ? new Education() : Education::findOrFail($request->education_id);
        $education->begin = '01/'.$request->begin;
        $education->school = $request->school;
        $education->course = $request->course;
        $education->local = $request->local;
        $education->resume_id = $request->resume_id;
        $education->end = null;
        if(!is_null($request->end))
            $education->end = '01/'.$request->end;
        if($education->save())
            return redirect()->route('resume.edit', ['id' => $education->resume_id, '#education_section']);
        return back()->withInput()->with('error', __('general.error_insert'));
    }
    public function edit($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $education = Education::findOrFail($id);
        return response()->json($education);
    }

    public function destroy($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect()->route('resume.edit', ['id' => $education->resume_id, '#education_section']);
    }
}
