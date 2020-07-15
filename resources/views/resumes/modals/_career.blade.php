<!-- Modal -->
<div class="modal fade" id="careerModal" tabindex="-1" role="dialog" aria-labelledby="careerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('resume.career.store')}}" method="post" class="needs-validation" name="save_career" id="save_education" style="display: inline">
        <div class="modal-header">
            <h5 class="modal-title" id="careerModalLabel">{{__('resume.career')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        @csrf
        @method('POST')

            <div class="form-row">
                <div class="col-md-8 form-group">
                    <label for="company" class="required">{{__('resume.company')}}</label>
                    <input type="hidden" name="resume_id"  id="resume_id" autocomplete="off" class="form-control" value="{{$resume->id}}">
                    <input type="hidden" name="career_id"  id="career_id" autocomplete="off" class="form-control" value="">
                    <input type="text" name="company"  id="company" autocomplete="off" class="form-control" required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="begin" class="required">{{__('resume.begin')}} (mm/YYYY)</label>
                    <input type="text" name="begin"  id="career_begin" class="form-control month_year" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8 form-group">
                    <label for="role" class="required">{{__('resume.role')}}</label>
                    <input type="text" name="role"  id="role" class="form-control " required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="end" >{{__('resume.end')}} (mm/YYYY)</label>
                    <input type="text" name="end"  id="career_end" placeholder="{{__('resume.end_place_holder')}}" autocomplete="off" class="form-control month_year">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="country" class="required">{{__('resume.country')}}</label>
                    <input type="text" name="country" id="country" autocomplete="off" class="form-control" required>
                </div>
                <div class="col-md-12 form-group">
                    <label for="state" class="required">{{__('resume.state')}}</label>
                    <input type="text" name="state" id="state" autocomplete="off" class="form-control" required>
                </div>
                <div class="col-md-12 form-group">
                    <label for="city" class="required">{{__('resume.city')}}</label>
                    <input type="text" name="city" id="city" autocomplete="off" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="responsabilities" class="required">{{__('resume.responsabilities')}}</label>
                    <textarea class="form-control" name="responsabilities" id="responsabilities" placeholder="{{__('resume.responsabilities')}}..." 
                        rows="7" required></textarea>
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