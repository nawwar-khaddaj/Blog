@extends('website.layouts.app')
@section('title')
    Articles
@endsection
@section('heading')
    <h1>{{ $article->title }}</h1>
    <span class="subheading">A Blog Assignment by Nawwar Khaddaj</span>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-2 mt-4">
            <a class="btn btn-info rounded-pill mb-2 mt-2 text-white btn-sm"  href="{{ route('home',['selectedTag' => 'all']) }}">All articles</a>
            @foreach($tags as $tag)
                    <a role="button" type="button" class="btn btn-info rounded-pill mb-2 mt-2 text-white btn-sm" href="{{ route('home',['selectedTag' => $tag->slug]) }}">{{ $tag->title }}<span class="badge badge-light ml-2">{{ $tag->ArticleCount }}</span></a>
            @endforeach
        </div>

        <div class="col-lg-8 col-md-10 mx-auto">
            <p class="post-meta">Posted by
                <a href="#">{{ $article->admin->name }}</a>
                on {{ $article->created_at->diffForHumans() }}</p>
            <hr>

            {!! $article->body !!}

            <hr>
            @foreach($article->images as $image)
                <img src="{{ storageImage($image) }}">
                <br>
            @endforeach
        </div>
    </div>

@endsection()
