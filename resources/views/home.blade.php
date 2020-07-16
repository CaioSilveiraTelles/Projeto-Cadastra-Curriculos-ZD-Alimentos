@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('resume.resumes') }}
                    <a href="{{route('resume.create')}}" class="btn btn-success float-right">{{ __('general.new_resume') }}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($resumes) > 0 )
                        @foreach($resumes as $resume)
                        <div class="card text-center">
                            <div class="card-header">
                                {{$resume->name}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$resume->email}}</h5>
                                <p class="card-text">{{__('general.last_update')}}: {{$resume->updated_at->diffForHumans()}}.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{route('resume.edit', ['id' => $resume->id])}}" class="float-right btn btn-primary">{{__('general.edit')}}</a>
                                    </div> 
                                    <div class="col-md-6">   
                                        <div class="dropdown show float-left" >
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{__('general.print')}}
                                        </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('resume.print', ['id' => $resume->id, 'font' => 'Arial, Helvetica, sans-serif'])}}" target="_blank" class="btn btn-secondary">Arial</a>
                                                <a class="dropdown-item" href="{{route('resume.print', ['id' => $resume->id, 'font' => 'Consolas, monaco, monospace'])}}" target="_blank" class="btn btn-secondary">Consolas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    @else
                        {{ __('resume.no_resume') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
