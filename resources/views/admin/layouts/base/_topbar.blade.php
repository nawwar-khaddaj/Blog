<div class="topbar">
    <!--begin::Tablet & Mobile Search-->
    <div class="dropdown d-flex d-lg-none">
        <!--begin::Toggle-->
        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                {{ AdminPanel::getSVG("media/svg/icons/General/Search.svg", "svg-icon-xl svg-icon-primary") }}
            </div>
        </div>
        <!--end::Toggle-->
        <!--begin::Dropdown-->
        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
            <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                <!--begin:Form-->
                <form method="get" class="quick-search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            {{ AdminPanel::getSVG("media/svg/icons/General/Search.svg", "svg-icon-lg") }}
                        </div>
                        <input type="text" class="form-control" placeholder="Search..." />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
                <!--begin::Scroll-->
                <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                <!--end::Scroll-->
            </div>
        </div>
        <!--end::Dropdown-->
    </div>
    <!--end::Tablet & Mobile Search-->
    <!--begin::Quick Actions-->
    <div class="topbar-item mr-4">
        <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_actions_toggle">
            <span class="svg-icon svg-icon-lg">
                {{ AdminPanel::getSVG("media/svg/icons/Layout/Layout-4-blocks.svg", "svg-icon-lg") }}
            </span>
        </div>
    </div>
    <!--end::Quick panel-->
    <!--begin::User-->
    <div class="topbar-item mr-4">
        <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_user_toggle">
            <span class="svg-icon svg-icon-lg">
                {{ AdminPanel::getSVG("media/svg/icons/General/User.svg", "svg-icon-xl") }}
            </span>
        </div>
    </div>
    <!--end::User-->
</div>
