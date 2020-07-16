<h3>{{__('resume.skills.plural')}}</h3>
<div class="mb-3">
    <select class="form-control" name="skills[]" id="skills" multiple>
        @foreach ($skills as $skill)
            <option value="{{ $skill->id }}" {{ in_array($skill->id, $resume->getSkillIdsAttribute()->toArray()) ? 'selected' : '' }}> 
                {{ $skill->description }} 
            </option>
        @endforeach    
    </select>
</div>