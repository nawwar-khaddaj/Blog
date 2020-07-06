<div class="form-group mb1">
    <label class="mt-3 {{ $locale == 'ar' ? 'float-right' : '' }}" for="{{ $name }}">
        {{ toTitle($name) }}
    </label>

    <select class="form-control select2" id="{{ $name }}" name="{{ $name }}"
            {{ $multiple ? 'multiple="multiple"' : '' }}
            {{ $required ? 'required' : '' }}
            dir="{{ $locale=='ar' ? 'rtl' : '' }}"
            style="width: 100% !important; opacity: 1 !important;">
        @foreach($options as $option)
            <option {{ $selected ? ( array_key_exists($option->id, $selected)  ? 'selected' : '') : '' }} value="{{ $option->id }}">{{ $option->translate($locale) ? ($option->translate($locale)->title != '' ? $option->translate($locale)->title : $option->title) : $option->title }}</option>
        @endforeach
    </select>

</div>
