    <h3>{{__('resume.education')}}</h3>
    @foreach($resume->educations as $education)
    <div class="card w-100 m-3 mx-auto">
        <div class="card-body">
            <h5 class="card-title">{{$education->course}}
                <form action="{{ route('resume.education.destroy', $education->id)}}" method="post" class="needs-validation" name="save_resume" id="save_resume" style="display: inline">
                    @csrf
                    @method('delete')
                    <button class="btn float-right" type="submit">
                    <i  class="fa fa-trash float-right" title="{{__('general.delete')}}" 
                        style="color:red" aria-hidden="true"></i></button>
                    
                </form>
            </h5>
            <p class="card-text">
                {{$education->school}}
                <a onclick="edit_education('{{$education->id}}');" class="btn btn-secondary float-right text-white">{{__('general.edit')}}</a></br>
                {{$education->local}} | {{$education->begin}}-{{$education->end ?? __('resume.current')}}
            </p>
        </div>
    </div>
        
    @endforeach
