<x-master title="admins" pageId="kt_wrapper">

    @section('breadcrumb')
        @include('admin.layouts.base._breadcrumb', ['singular' => 'Admin', 'route' => action('Admin\AdminController@index'), 'plural' => 'Admins'])
    @endsection

    <x-slot name="aside"></x-slot>
    <x-slot name="header"></x-slot>
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-12">
                <h1 class="mt-10" >All Admins</h1>

                @include('admin.layouts.panels._alerts')

                @include('admin.admin._table')

            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
    </div>
    <!--end::Container-->

    <x-slot name="footer"></x-slot>

</x-master>
