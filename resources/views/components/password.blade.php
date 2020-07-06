<div class="form-group" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}">{{ toTitle($name) }}</label>
    <input type="password" class="form-control"
           placeholder="Enter {{ toTitle($name) }}"
           name="{{ $name }}"
           value="{{ $oldValue ?? '' }}"
    />
</div>

<div class="form-group" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}">Confirm {{ toTitle($name) }}</label>
    <input type="password" class="form-control"
           placeholder="Enter confirm {{ toTitle($name) }}"
           name="{{ $name }}_confirmation"
    />
</div>
