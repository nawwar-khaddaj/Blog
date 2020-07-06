<x-master title="Dashboard" pageId="kt_wrapper">

    <x-slot name="aside"></x-slot>
    <x-slot name="header"></x-slot>

    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-8">
                <h1 class="mt-10" >Welcome to Admin Dashboard</h1>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-4">
                <div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-danger svg-icon-4x">
                             <svg>
                                  {{ AdminPanel::getSVG('media/svg/icons/Design/Sketch.svg') }}
                             </svg>
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ route('admin.tags.index') }}" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Tags
                                </a>
                                <div class="text-dark-75">
                                    you can create, browse, update, delete tags
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-custom wave wave-animate wave-success mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-success svg-icon-4x">
                             <svg>
                                  {{ AdminPanel::getSVG('media/svg/icons/Design/PenAndRuller.svg', "vg-icon-xl svg-icon-success") }}
                             </svg>
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ action('Admin\ArticleController@index') }}" class="text-dark text-hover-success font-weight-bold font-size-h4 mb-3">
                                    Articles
                                </a>
                                <div class="text-dark-75">
                                    you can create, browse, update, delete Articles
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-custom wave wave-animate wave-warning mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-warning svg-icon-4x">
                             <svg>
                                  {{ AdminPanel::getSVG('media/svg/icons/Design/Pen-tool-vector.svg', "vg-icon-xl svg-icon-warning") }}
                             </svg>
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ action('Admin\AdminController@index') }}" class="text-dark text-hover-warning font-weight-bold font-size-h4 mb-3">
                                    Users
                                </a>
                                <div class="text-dark-75">
                                    you can create, browse, update, delete Users
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
    </div>
    <!--end::Container-->

    <x-slot name="footer"></x-slot>

</x-master>
