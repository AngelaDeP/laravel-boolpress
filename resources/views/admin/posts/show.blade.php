@extends('admin.layouts.base')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <h1>View your own post!</h1>

            <div><strong>Title: </strong> {{$post->title}}</div>
                <div><strong>Content: </strong> {!! $post->content !!}</div>
                <div><strong>Category: </strong> {{$post->category->name}}</div>
                <div><strong>Slug: </strong> {{$post->slug}}</div>

                <div>
                    @foreach ($post->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                    @endforeach
                </div>

                <div class="mt-3 mb-2"><strong>Post written {{$timeDifference}} day/s ago</strong></div>
            </div>

            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go back</a>
        </div>
    </div>
@endsection
