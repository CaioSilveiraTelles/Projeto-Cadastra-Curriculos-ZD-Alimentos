<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\SocialMedia;

class SocialMediaController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $social_media = new SocialMedia();
        $social_media->description = $request->description ?? null;
        $social_media->link = $request->link;
        $social_media->icon = $request->icon;
        $social_media->resume_id = $request->resume_id;
        if($social_media->save())
            return redirect()->route('resume.edit', ['id' => $social_media->resume_id, '#social_media_section']);
        return back()->withInput()->with('error', __('general.error_insert'));
    }

    public function destroy($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $social_media = SocialMedia::findOrFail($id);
        $social_media->delete();
        return redirect()->route('resume.edit', ['id' => $social_media->resume_id, '#social_media_section']);
    }
}
