@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            {{ __('general.new_resume') }}
                        </div>
                        <div class="col-md-6">
                        <a href="{{ route('home') }}" class="btn btn-secondary float-right">{{__('general.back')}}</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <hr>
                @include('resumes._form',['method' => 'post', 'routes' => 'resume.store', 'submit' => __('general.save')])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
