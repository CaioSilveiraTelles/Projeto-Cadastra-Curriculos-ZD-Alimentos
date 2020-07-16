<h3>{{__('resume.languages.plural')}}</h3>
<div class="mb-3">
    <select class="form-control" name="languages[]" id="languages" multiple>
        @foreach ($languages as $language)
            <option value="{{ $language->id }}" {{ in_array($language->id, $resume->getLanguageIdsAttribute()->toArray()) ? 'selected' : '' }}> 
                {{ $language->description }} 
            </option>
        @endforeach    
    </select>
</div>