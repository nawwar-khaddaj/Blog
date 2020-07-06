<!--begin::Advance Table Widget 3-->
<div class="card card-custom gutter-b shadow-lg mt-10">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">all tags</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('admin.tags.create') }}" class="btn btn-primary font-weight-bolder font-size-sm">
                <span class="svg-icon svg-icon-md svg-icon-white">
                    {{ AdminPanel::getSVG('media/svg/icons/Code/Plus.svg') }}
                </span>Add New Tag</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                <tr class="text-uppercase">
                    <th style="min-width: 250px" class="pl-7">
                        <span class="text-dark-75">tags</span>
                    </th>
                    <th style="min-width: 100px">title</th>
                    <th style="min-width: 100px">slug</th>
                    <th style="min-width: 120px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $key => $tag)
                    <tr>
                    <td class="pl-0 py-8">
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 ml-9 font-size-lg">{{ $tag->id }}</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $tag->title }}</span>
                    </td>
                    <td>
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $tag->slug }}</span>
                    </td>
                    <td class="text-right pr-0">
                        <a href="{{ action('Admin\TagController@edit', ['tag' => $tag]) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-toggle="tooltip" title="Edit">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                {{ AdminPanel::getSVG('media/svg/icons/Communication/Write.svg') }}
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-icon btn-light btn-hover-primary btn-sm deleteRow" data-toggle="tooltip" title="Delete">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                {{ AdminPanel::getSVG('media/svg/icons/General/Trash.svg') }}
                            </span>
                            <form method="post" action="{{ action('Admin\TagController@destroy', ['tag' => $tag]) }}">
                                @method('DELETE')
                                @csrf
                            </form>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="tooltip" title="Show">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                {{ AdminPanel::getSVG('media/svg/icons/Navigation/Arrow-right.svg') }}
                                </span>
                        </a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 3-->
