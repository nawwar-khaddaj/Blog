 <div class="form-group row" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}" class="col-12 row col-form-label">{{ toTitle($name) }}</label>
    <div class="row col-12">
        <div class="checkbox-list">
            @foreach($choices as $choice)
            <label class="checkbox checkbox-square checkbox-light-success">
                <input name="{{ $name }}" {{ isset($oldValue) ? ($oldValue == 1 ? 'checked' : '') :'' }} type="checkbox" value="{{ $choice->value }}" @if($required) required @endif/> {{ $choice->name }}
                <span></span>
            </label>
            @endforeach
        </div>
    </div>
</div>
