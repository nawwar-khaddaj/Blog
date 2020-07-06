@extends('website.layouts.app')
@section('title')
    Articles
@endsection
@section('heading')
    <h1>Assignment Blog</h1>
    <span class="subheading">A Blog Assignment by Nawwar Khaddaj</span>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 mt-4">
            <a class="btn @if($selectedTag == 'all') btn-danger @else btn-info @endif rounded-pill mb-2 mt-2 text-white btn-sm"  href="{{ route('home',['selectedTag' => 'all']) }}">All articles</a>
            @foreach($tags as $tag)
                    <a role="button" type="button" class="btn @if($selectedTag != null && $selectedTag != 'all' && $tag->id == $selectedTag->id) btn-danger @else btn-info @endif rounded-pill mb-2 mt-2 text-white btn-sm" href="{{ route('home',['selectedTag' => $tag->slug]) }}">{{ $tag->title }}<span class="badge badge-light ml-2">{{ $tag->ArticleCount }}</span></a>
            @endforeach
        </div>

        <div class="col-lg-8 col-md-10 mx-auto">

            @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{{ route('article', ['slug' => $article->slug]) }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! toDesc($article->body) !!}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">{{ $article->admin->name }}</a>
                        on {{ $article->created_at->diffForHumans() }}</p>
                </div>
                <hr>
            @endforeach

            <!-- Pager -->
{{--            <div class="clearfix">--}}
{{--                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>--}}
{{--            </div>--}}
        </div>
    </div>

@endsection()
