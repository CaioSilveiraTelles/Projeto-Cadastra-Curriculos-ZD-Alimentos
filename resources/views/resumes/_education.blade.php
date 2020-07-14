    <h3>{{__('resume.education')}}</h3>
    @foreach($resume->educations as $education)
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">{{$education->course}} | {{$education->begin}}-{{$education->end ?? __('resume.current')}}</h5>
            <p class="card-text">
                {{$education->school}}
                <a onclick="edit_education('{{$education->id}}');" class="btn btn-secondary float-right text-white">{{__('general.edit')}}</a></br>
                {{$education->local}}
            </p>
        </div>
    </div>
        
    @endforeach
