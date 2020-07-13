@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('general.edit_resume') }}
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
                @include('resumes._form',['method' => 'post', 'routes' => 'resume.update', 'submit' => __('general.save')])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
