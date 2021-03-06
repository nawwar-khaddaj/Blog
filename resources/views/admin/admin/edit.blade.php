<x-master title="edit admin slide" pageId="kt_wrapper">

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
                <h1 class="mt-10" >Edit  <code>{{ $admin->title }}</code>  Admin</h1>

                @include('admin.layouts.panels._alerts')

                <x-form :action="route('admin.admins.update', ['admin' => $admin])" :method="'POST'" :submit="'PUT'">
                    @foreach(config('translatable.locales') as $key => $locale)
                        <div id="admin_{{$locale}}" class="tab-pane fade {{ $key==0 ? 'show active' : '' }}" role="tabpanel" aria-labelledby="{{$locale}}-tab-1">
                            @include('admin.admin._form')
                        </div>
                    @endforeach
                </x-form>

            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
    </div>
    <!--end::Container-->

    <x-slot name="footer"></x-slot>

</x-master>
