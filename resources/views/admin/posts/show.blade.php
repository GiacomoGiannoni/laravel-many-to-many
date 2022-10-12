@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div>
            <h1 class="mb-3">{{$post->title}}</h1>
        </div>

        <h4>
            <span class="font-weight-bold mb-3">Slug:</span>
            {{$post->slug}}
        </h4>

        <div>
            <span class="font-weight-bold mb-3">Content:</span>
            {{$post->content}}
        </div>


        <div>
            <span class="font-weight-bold mb-3">Category:</span>
            {{$post->category?$post->category->name: '-'}}
        </div>

        <div>
            <span class="font-weight-bold mb-3">Tags:</span>
            @foreach ($post->tags as $tag)
                {{$tag->name}},
            @endforeach
        </div>

        <a href="{{route('admin.posts.index')}}" class="btn btn-primary mb-3">Back</a>
    </div>



@endsection
