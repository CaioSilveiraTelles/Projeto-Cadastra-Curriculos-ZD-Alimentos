<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('general.app_name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4 m-xl-5">
            <div class="container" style="font-family: {{$font}};">
                <div class="row">
                    <div class="col-md-7 align-middle">
                        <h1 class="float-left font-weight-bold">{{$resume->name}}</h1> </br>
                        @if(is_null($resume->careers->first()->end))
                        <div class="float-left font-weight-bold">{{$resume->careers->first()->role}} {{__('resume.at')}} {{$resume->careers->first()->company}}</div>
                        @else
                        <div class="float-left font-weight-light font-italic">{{__('resume.unemployed')}}</div>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <div class="float-right"><spam class="font-weight-bold">{{__('resume.email')}}:</spam> {{$resume->email}} </div></br>
                        @if($resume->phone)
                        <div class="float-right"><spam class="font-weight-bold">{{__('resume.phone')}}:</spam> {{$resume->phone}} </div> </br>
                        @endif
                        <div class="float-right"><spam class="font-weight-bold">{{__('resume.nationality')}}:</spam> {{$resume->nationality}} </div></br>
                        <div class="float-right"><spam class="font-weight-bold">{{__('resume.age')}}:</spam> {{$resume->age}} </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 1px dashed black">
                    </div>
                </div>
                @if($resume->cover_letter)
                <div class="row">
                    <div class="col-md-4 font-weight-bold text-uppercase align-middle">
                        {{__('resume.personal_statement')}}
                    </div>
                    <div class="col-md-8 text-justify">
                        {{$resume->cover_letter}}
                    </div>
                </div>
                @endif
                @if(count($resume->careers) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 1px dashed black">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="float-left font-weight-bold text-uppercase">{{__('resume.career')}}</div>
                    </div>
                </div>
                @foreach($resume->careers as $career)
                <div class="row">
                    <div class="col-md-4">
                        <div class="float-left font-italic">{{$career->city}}, {{$career->state}}</div></br>
                        <div class="float-left font-italic">{{substr($career->begin, 3)}}-{{substr($career->end ?? '   '.__('resume.current'), 3) }}</div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-left font-weight-bold">{{$career->role}}</div></br>
                        <div class="float-left font-weight-light">{{$career->company}}</div></br>
                        <div class="text-justify font-weight-light">{{$career->responsabilities}}</div>
                    </div>       
                </div>
                </br>
                @endforeach
                @endif
                @if(count($resume->educations) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 1px dashed black">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="float-left font-weight-bold text-uppercase">{{__('resume.education')}}</div>
                    </div>
                </div>
                @foreach($resume->educations as $education)
                <div class="row">
                    <div class="col-md-4">
                        <div class="float-left font-italic">{{$education->local}}</div></br>
                        <div class="float-left font-italic">{{substr($education->begin, 3)}}-{{substr($education->end ?? '   '.__('resume.current'), 3) }}</div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-left font-weight-bold">{{$education->course}}</div></br>
                        <div class="float-left font-weight-light">{{$education->school}}</div>
                    </div>       
                </div>
                </br>
                @endforeach
                @endif





                <div class="row">
                    @if(count($resume->languages) > 0)
                    <div class="col-md-4">
                        <hr style="border-top: 1px dashed black">
                    </div>
                    @endif
                    <div class="col-md-{{(count($resume->languages) > 0) ? 8 : 12}}">
                        <hr style="border-top: 1px dashed black">
                    </div>
                </div>
                <div class="row">
                    @if(count($resume->languages) > 0)
                    <div class="col-md-{{(count($resume->skills) > 0) ? 4 : 12}}">
                        <div class="float-left font-weight-bold text-uppercase">{{__('resume.languages.plural')}}</div>
                    </div>
                    @endif
                    @if(count($resume->skills) > 0)
                    <div class="col-md-{{(count($resume->languages) > 0) ? 8 : 12}}">
                        <div class="float-left font-weight-bold text-uppercase">{{__('resume.skills.plural')}}</div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    @if(count($resume->languages) > 0)
                    <div class="col-md-{{(count($resume->skills) > 0) ? 4 : 12}}">
                        @foreach($resume->languages as $lang)
                        <div class="float-left">{{$lang->description}}</div></br>
                        @endforeach
                    </div>
                    @endif
                    @if(count($resume->skills) > 0)
                    <div class="col-md-{{(count($resume->languages) > 0) ? 8 : 12}}">
                        <div class="float-left text-justify">
                            @foreach($resume->skills as $skill)
                                 {{' - '.$skill->description.';'}}
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>




            </div>
        </main>
    </div>

</body>
</html>
