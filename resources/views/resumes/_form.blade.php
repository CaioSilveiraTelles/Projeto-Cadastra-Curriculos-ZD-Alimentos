<form action="{{ route($routes, $resume->id ?? null)}}" method="post" class="needs-validation" name="save_resume" id="save_resume" style="display: inline">
    @csrf
    @method($method)
    <div class="form-row">
        <div class="col-md-6 form-group">
            <label for="name" class="required">{{__('general.name')}}</label>
            <input type="text" name="name" class="form-control" value="{{old('name') ?? $resume->name ?? ''}}" required>
        </div>
        <div class="col-md-6 form-group">
            <label for="email" class="required">{{__('resume.email')}}</label>
            <input type="text" name="email" class="form-control" value="{{old('email') ?? $resume->email ?? ''}}" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 form-group">
            <label for="birth" class="required">{{__('resume.birth')}}</label>
            <input type="text" name="birth" autocomplete="off" class="form-control datepicker date" value="{{old('birth') ?? $resume->birth ?? ''}}" required>
        </div>
        <div class="col-md-4 form-group">
            <label for="nationality" class="required">{{__('resume.nationality')}}</label>
            <input type="text" name="nationality" class="form-control " value="{{old('nationality') ?? $resume->nationality ?? ''}}" required>
        </div>
        <div class="col-md-4 form-group">
            <label for="phone">{{__('resume.phone')}}</label>
            <input type="text" name="phone" class="form-control phone" value="{{old('phone') ?? $resume->phone ?? ''}}">
        </div>
    </div><div class="form-row">
        <div class="col-md-12 form-group">
            <label for="cover_letter">{{__('resume.cover_letter')}}</label>
            <textarea class="form-control" name="cover_letter" placeholder="{{__('resume.cover_letter_hint')}}..." 
                id="cover_letter" rows="7">{{old('cover_letter') ?? $resume->cover_letter ?? ''}}</textarea>
        </div>
    </div>

    <hr class="mb-4">
    @if(isset($resume->id))
        @include('resumes.modals._education')
        @include('resumes._education')
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#educationModal">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
        <hr class="mb-4">
        @include('resumes._career')
        <hr class="mb-4">
    @endif
    <div class="row">
        <div class="col-md-6 mb-3">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block mb-3" type="button">{{__('general.back')}}</a>
        </div>
        <div class="col-md-6 mb-3">
            <button class="btn btn-success btn-lg btn-block mb-3" type="submit">{{$submit}}</button>
        </div>
    </div>
</form>
