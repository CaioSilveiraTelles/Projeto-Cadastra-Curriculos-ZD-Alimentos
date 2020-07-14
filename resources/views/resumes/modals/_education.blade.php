<!-- Modal -->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="educationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('resume.education.store')}}" method="post" class="needs-validation" name="save_education" id="save_education" style="display: inline">
        <div class="modal-header">
            <h5 class="modal-title" id="educationModalLabel">{{__('resume.education')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        @csrf
        @method('POST')

            <div class="form-row">
                <div class="col-md-8 form-group">
                    <label for="school" class="required">{{__('resume.school')}}</label>
                    <input type="hidden" name="resume_id"  id="resume_id" autocomplete="off" class="form-control" value="{{$resume->id}}">
                    <input type="hidden" name="education_id"  id="education_id" autocomplete="off" class="form-control" value="">
                    <input type="text" name="school"  id="school" autocomplete="off" class="form-control" required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="begin" class="required">{{__('resume.begin')}} (mm/YYYY)</label>
                    <input type="text" name="begin"  id="begin" class="form-control month_year" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8 form-group">
                    <label for="local" class="required">{{__('resume.local')}}</label>
                    <input type="text" name="local"  id="local" class="form-control " required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="end" >{{__('resume.end')}} (mm/YYYY)</label>
                    <input type="text" name="end"  id="end" placeholder="{{__('resume.end_place_holder')}}" autocomplete="off" class="form-control month_year">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="course" class="required">{{__('resume.course')}}</label>
                    <input type="text" name="course" id="course" autocomplete="off" class="form-control" required>
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