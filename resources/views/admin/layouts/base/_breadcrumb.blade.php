<!--begin::Subheader-->
<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline mr-5">
                <!--begin::Page Title-->
                <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">{{ $singular }}</h2>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ $route }}" class="text-muted">{{ $plural }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="active">{{ $singular }}</a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        @if(isset($create))
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" class="btn btn-fh btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
            <span class="svg-icon svg-icon-success svg-icon-lg">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                {{ \App\Classes\Theme\AdminPanel::getSVG($svgPath) }}
                <!--end::Svg Icon-->
            </span>{{ $singular }}</a>
            <!--end::Button-->
        </div>

        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" class="btn btn-fh btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
            <span class="svg-icon svg-icon-success svg-icon-lg">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                {{ \App\Classes\Theme\AdminPanel::getSVG($svgPath) }}
            <!--end::Svg Icon-->
            </span>{{ $blural }}</a>
            <!--end::Button-->
        </div>
        @endif
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
