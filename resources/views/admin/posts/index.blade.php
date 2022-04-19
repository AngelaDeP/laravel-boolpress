@extends('admin.layouts.base')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <a href="{{route('admin.posts.create')}}" class="btn btn-primary m-3">Create your post</a>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{substr($post->content, 0, 30)}}</td>
                                <td>{{isset($post->category)?$post->category->name:'N.D.'}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary m-1">View</a>
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary m-1">Edit</a>

                                    <form method="POST" action="{{route('admin.posts.destroy', $post->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
