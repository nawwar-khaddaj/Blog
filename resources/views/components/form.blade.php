<div class="card card-custom shadow-lg mt-10">
    <!--begin::Form-->
    <form action="{{ $action ?? '#' }}" method="{{ $method ?? 'POST' }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <ul class="nav nav-tabs float-right" id="myTab" role="tablist">
                @foreach(config('translatable.locales') as $key => $locale)
                    <li class="nav-item">
                        <a class="btn btn-icon btn-light-success {{ $key==0 ? 'active' : '' }} pulse pulse-success" id="{{$locale}}-tab-1" data-toggle="tab" href="#section_{{$locale}}">
                            <span class="nav-text">{{ $locale }}</span>
                            <span class="pulse-ring"></span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content mt-20" id="myTabContent">
                {{ $slot }}
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">{{ $submit == 'PUT' ? 'Update' : 'Save' }}</button>
            <button type="submit" class="btn btn-secondary" name="add-new">{{ $submit == 'PUT' ? 'Update' : 'Save' }} and new</button>
        </div>
    </form>
    <!--end::Form-->
</div>
