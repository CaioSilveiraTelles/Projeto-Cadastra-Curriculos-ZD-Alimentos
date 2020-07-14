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
@section('scripts')
    <script>
            function edit_education(id){
                fetch('/resume/education/'+id, {
                    method: 'GET',
                }).then(res => {
                    res.body.getReader().read().then(r => { //returns a Uint8 buffer array
                        const result = new TextDecoder("utf-8").decode(r.value); //Decodes the buffer array into a string
                        const re = (JSON.parse(result));
                        document.getElementById('course').value = re['course'];
                        document.getElementById('school').value = re['school'];
                        document.getElementById('local').value = re['local'];
                        document.getElementById('begin').value = re['begin'];
                        document.getElementById('end').value = re['end'];
                        document.getElementById('education_id').value = re['id'];
                        $("#educationModal").modal();
                    })
                });
            }

            function create_education(){
                document.getElementById('course').value = '';
                document.getElementById('school').value = '';
                document.getElementById('local').value = '';
                document.getElementById('begin').value = '';
                document.getElementById('end').value = '';
                document.getElementById('education_id').value = '';
                $("#educationModal").modal();
                
            }
            function destroy_education(){
                
                
            }

    </script>
@endsection