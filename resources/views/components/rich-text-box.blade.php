<div class="tinymce" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}" for="kt-tinymce-{{ $locale }}">{{ toTitle($name) }} {{ $locale }}</label>
{{--    <textarea id="kt-tinymce-{{ $locale }}" name="{{ $name }}:{{ $locale }}" class="tox-target" {{ $required ? 'required' : '' }}>{{ $oldValue != '' ? $oldValue : old($name.':en') }}--}}
{{--    </textarea>--}}

    <textarea class="rich" name="{{ $name }}:{{ $locale }}" {{ $required ? 'required' : '' }}>
        {{ $oldValue != '' ? $oldValue : old($name.':en') }}
    </textarea>
</div>
