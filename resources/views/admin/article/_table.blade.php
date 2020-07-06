<!--begin::Advance Table Widget 3-->
<div class="card card-custom gutter-b shadow-lg mt-10">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">all articles</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary font-weight-bolder font-size-sm">
                <span class="svg-icon svg-icon-md svg-icon-white">
                    {{ AdminPanel::getSVG('media/svg/icons/Code/Plus.svg') }}
                </span>Add New Article slide</a>
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
                        <span class="text-dark-75">articles</span>
                    </th>
                    <th style="min-width: 100px">title</th>
                    <th style="min-width: 100px">author</th>
                    <th style="min-width: 100px">Published</th>
                    <th style="min-width: 100px">body</th>
                    <th style="min-width: 120px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $key => $article)
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0 mr-2">
                                    <div class="symbol-label" style="background-image: url({{ localImage($article->image) }})"></div>
                                </div>
                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 ml-3 font-size-lg">{{ $article->id }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $article->title }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $article->admin->name }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $article->is_published ? 'Yes' : 'No' }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{!! toDescEditor($article->body) !!}</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="{{ action('Admin\ArticleController@edit', ['article' => $article]) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3" data-toggle="tooltip" title="Edit">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                {{ AdminPanel::getSVG('media/svg/icons/Communication/Write.svg') }}
                            </span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-icon btn-light btn-hover-primary btn-sm deleteRow" data-toggle="tooltip" title="Delete">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                {{ AdminPanel::getSVG('media/svg/icons/General/Trash.svg') }}
                            </span>
                                <form method="post" action="{{ action('Admin\ArticleController@destroy', ['article' => $article]) }}">
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
