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
        $social_media = (is_null($request->social_media_id)) ? new SocialMedia() : SocialMedia::findOrFail($request->social_media_id);
        $social_media->description = $request->description ?? null;
        $social_media->link = $request->link;
        $social_media->icon = $request->icon;
        if($edsocial_mediaucation->save())
            return redirect()->route('resume.edit', ['id' => $social_media->resume_id, '#social_media_section']);
        return back()->withInput()->with('error', __('general.error_insert'));
    }
    public function edit($id)
    {
        $user = Auth::user();
        \App::setLocale($user->locale);
        $education = SocialMedia::findOrFail($id);
        return response()->json($education);
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
