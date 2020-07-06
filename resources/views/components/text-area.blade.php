<div class="form-group mb-1" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}" for="{{ $name }}">{{ toTitle($name) }} {{ $locale }}</label>
    <textarea name="{{ $name }}:{{ $locale }}" class="form-control" id="{{ $name }}" rows="6" {{ $required ? 'required' : '' }}>{{ $oldValue != '' ? $oldValue : old($name.':en') }}</textarea>
</div>
