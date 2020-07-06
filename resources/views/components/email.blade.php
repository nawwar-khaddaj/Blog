<div class="form-group" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}">{{ toTitle($name) }}</label>
    <input type="email" class="form-control"
           placeholder="Enter {{ toTitle($name) }}"
           name="{{ $name }}"
           value="{{ isset($oldValue) && $oldValue != '' ? $oldValue : old($name) }}"
    />
</div>
