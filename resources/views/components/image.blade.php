<br>
<div class="form-group col-md-12 row" dir="{{ $locale=='ar' ? 'rtl' : '' }}">
    <label class="{{ $locale=='ar' ? 'float-right' : '' }}" class="col-3 col-form-label">{{ toTitle($name) }}</label>
    <div class="{{ $locale=='ar' ? 'mr-10' : 'ml-10' }} image-input border-red-500" id="kt_image_2">
        <div class="image-input-wrapper" style="background-image: url({{ $oldValue ? localImage($oldValue) : asset('custom/upload_simge.png') }}); background-size: contain"></div>

        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change"
               data-toggle="tooltip" title="" data-original-title="Change image">
            <i class="fa fa-pen icon-sm text-muted"></i>
            <input type="file" name="{{ $name }}" accept=".png, .jpg, .jpeg" @if($required) required @endif />
            <input type="hidden" name="image_remove"/>
        </label>

        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel"
              data-toggle="tooltip" title="Cancel image">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>
    </div>
</div>

