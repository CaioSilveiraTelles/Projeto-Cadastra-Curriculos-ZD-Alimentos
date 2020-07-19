<section id="social_media_section">
    <h3>{{__('resume.social_media')}}</h3>
    <table class="table">
        <tbody>
    @foreach($resume->social_medias as $social_media)
            <tr>
                <td>
                    <p class="text-left"><i class="fa fa-{{$social_media->icon}} float-left " aria-hidden="true"> </i> 
                        <spam class="m-3">{{$social_media->link}}</spam>
                    </p>
                </td>
                <td>
                    <form action="{{ route('resume.social_media.destroy', $social_media->id)}}" method="post" class="needs-validation" name="save_resume" id="save_resume" style="display: inline">
                        @csrf
                        @method('delete')
                        <button class="btn float-right" type="submit">
                        <i  class="fa fa-trash float-right" title="{{__('general.delete')}}" 
                            style="color:red" aria-hidden="true"></i></button>
                        
                    </form>
                </td>
            </tr>
    @endforeach
        </tbody>
    </table>
    @if(count($resume->social_medias) == 0)
    <h6>{{__('general.no_social_media_found')}}</h6>
    @endif
</section>
