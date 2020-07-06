<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('admin.layouts.partials._meta')
@yield('style')
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">

<!--begin::Main-->
<div class="page-loader page-loader-logo">
    <img alt="{{ config('app.name') }}" width="64" height="64" src="{{ asset('custom/Logo_icon.png') }}"/>
    <div class="spinner spinner-primary"></div>
</div>

<!--begin::Header Mobile-->
@include('admin.layouts.base._header-mobile')
<!--end::Header Mobile-->

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
        @includeWhen(isset($aside), 'admin.layouts.base._aside')
        <!--end::Aside-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="{{ $pageId }}">

            <!--begin::Header-->
            @includeWhen(isset($header), 'admin.layouts.base._header');
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

            @yield('breadcrumb')

            <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    {{ $slot }}
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            @includeWhen(isset($footer), 'admin.layouts.base._footer')
            <!--end::Footer-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->

<!--begin::Quick Actions Panel-->
@include('admin.layouts.panels._actions')
<!--end::Quick Actions Panel-->

<!-- begin::User Panel-->
@includeWhen(Auth::getUser(), 'admin.layouts.panels._profile')
<!-- end::User Panel-->

<!--begin::Scrolltop-->
@include('admin.layouts.panels._scroll')
<!--end::Scrolltop-->

<!--begin::Sticky Toolbar-->
@includeWhen(Auth::getUser(), 'admin.layouts.panels._sticky_toolbar')
<!--end::Sticky Toolbar-->

@include('admin.layouts.partials._scripts')
@yield('scripts')

@includeWhen(isset($richTextBoxScript), 'admin.layouts.partials.rich_text_script')
</body>
<!--end::Body-->
</html>
