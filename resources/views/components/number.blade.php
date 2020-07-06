<div class="form-group mb-1" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}" for="{{ $name }}" class="col-2 col-form-label">{{ toTitle($name) }}</label>
    <input class="form-control" name="{{ $name }}" type="number" value="{{ $oldValue != '' ? $oldValue : old($name.':en') }}" id="{{ $name }}" min="{{ $min }}" max="{{ $max }}"/>
</div>
