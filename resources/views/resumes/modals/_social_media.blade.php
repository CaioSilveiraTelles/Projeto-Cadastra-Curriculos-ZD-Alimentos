<!-- Modal -->
<div class="modal fade" id="socialMediaModal" tabindex="-1" role="dialog" aria-labelledby="socialMediaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('resume.social_media.store')}}" method="post" class="needs-validation" name="save_social_media" id="save_education" style="display: inline">
        <div class="modal-header">
            <h5 class="modal-title" id="socialMediaModalLabel">{{__('resume.social_media')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        @csrf
        @method('POST')

            <div class="form-row">
                <div class="col-md-3 form-group">
                    <label for="icon" class="required">{{__('resume.social_media')}}</label>
                    <input type="hidden" name="resume_id"  id="resume_id" autocomplete="off" class="form-control" value="{{$resume->id}}">
                    <select name="icon"  id="icon" class="form-control" required>
                        <option value="github"><i class="fa fa-github" aria-hidden="true"></i>Github</option>
                        <option value="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</option>
                        <option value="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i>Linkedin</option>
                        <option value="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</option>
                        <option value="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</option>
                    </select>
                </div>
                <div class="col-md-9 form-group">
                    <label for="link" class="required">{{__('general.link')}}</label>
                    <input type="text" name="link"  id="link" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('general.close_modal')}}</button>
            <button type="submit" class="btn btn-primary">{{__('general.save')}}</button>
        </div>
      </form>
    </div>
  </div>
</div>