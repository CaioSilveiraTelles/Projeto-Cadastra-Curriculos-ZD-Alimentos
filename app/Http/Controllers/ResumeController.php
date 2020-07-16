<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Resume;
use App\Helpers;
use App\Language;
use App\Skill;


class ResumeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        return view('resumes.create');
    }

    public function store(Request $request)
    {
        
        $user = Auth::user();
        $resume = new Resume($request->all());
        
        if(!is_null($request->phone))
            $resume->phone = Helpers::removeSpecialChar($request->phone);
          
        $resume->user_id = $user->id; 
        \App::setLocale($user->locale);
        if($resume->save())
            return redirect()->route('resume.edit', ['id' => $resume->id]);
        return back()->withInput()->with('error', __('general.error_insert'));
    }

    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        $user = Auth::user();
        \App::setLocale($user->locale);
        if($user->id != $resume->user_id)
            return redirect()->route('login');
        $languages = Language::all();
        $skills = Skill::all();
        return view('resumes.edit', compact('resume', 'languages', 'skills'));
        
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $resume = Resume::findOrFail($id);
        if($user->id != $resume->user_id)
            return redirect()->route('login');

        $resume->phone = $request->phone ?? null;    
        $resume->cover_letter = $request->cover_letter ?? null;    
        $resume->email = $request->email;    
        $resume->name = $request->name;    
        $resume->birth = $request->birth;    
        $resume->nationality = $request->nationality;    
        if(!is_null($request->phone))
            $resume->phone = Helpers::removeSpecialChar($request->phone);
          
        \App::setLocale($user->locale);
        $resume->languages()->sync($request->languages);
        $resume->skills()->sync($request->skills);
        if($resume->save())
            return redirect()->route('resume.edit', ['id' => $resume->id, '#resume_section']);
        return back()->withInput()->with('error', __('general.error_insert'));
    }

    public function resumes()
    {
        
        dd(Resume::with(['educations', 'careers', 'languages', 'skills'])->get());
        
    }
}
