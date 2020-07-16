<section id="career_section">
    <h3>{{__('resume.career')}}</h3>
    @foreach($resume->careers as $career)
    <div class="card w-100 m-3 mx-auto">
        <div class="card-body">
            <h5 class="card-title">{{$career->role}}
                <form action="{{ route('resume.career.destroy', $career->id)}}" method="post" class="needs-validation" name="save_resume" id="save_resume" style="display: inline">
                    @csrf
                    @method('delete')
                    <button class="btn float-right" type="submit">
                    <i  class="fa fa-trash float-right" title="{{__('general.delete')}}" 
                        style="color:red" aria-hidden="true"></i></button>
                    
                </form>
            </h5>
            <p class="card-text">
                {{$career->company}}
                <a onclick="edit_career('{{$career->id}}');" class="btn btn-secondary float-right text-white">{{__('general.edit')}}</a></br>
                {{$career->city}} | {{substr($career->begin, 3)}}-{{substr($career->end ?? '   '.__('resume.current'), 3) }}
            </p>
        </div>
    </div>
    @endforeach
    @if(count($resume->careers) == 0)
        <h6>{{__('general.no_career_found')}}</h6>
    @endif
</section>
