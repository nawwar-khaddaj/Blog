<div class="form-group" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}">{{ toTitle($name) }} {{ $locale }}</label>
    <input type="text" class="form-control"
           placeholder="Enter {{ toTitle($name) }}"
           name="{{ $name }}{{ $locale!='' ? ':'. $locale : '' }}"
           value="{{ $oldValue != '' ? $oldValue : old($name.':en') }}"
           {{ $readonly ? 'readonly' : '' }}
    />
</div>
