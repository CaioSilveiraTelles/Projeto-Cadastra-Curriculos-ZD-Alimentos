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
                                <a href="{{route('resume.edit', ['id' => $resume->id])}}" class="btn btn-primary">{{__('general.edit')}}</a>
                                <a href="#" class="btn btn-secondary">{{__('general.print')}}</a>
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
