<div class="form-group mt-2">
    <label class="col-form-label col-lg-1 col-sm-12 text-lg-left">{{ toTitle($name) }}</label>
    <div class="col-lg-4 col-md-11 col-sm-12">
        <div class="">
            <input type="file" multiple name="{{ $name }}[]" class="dropify" @if($required) required @endif data-default-file="{{ isset($oldValue) ? storageImage($oldValue) : '' }}">
        </div>
    </div>
</div>
