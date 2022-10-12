@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
            <h1 class="mb-5 text-center">Add post</h1>
            <div class="form-group mb-3">
                <label for="title" class="form-label">Category</label>  
                <select name="category_id" class="form-control @error('title') is-invalid @enderror" id="category_id">
                    <option {{(old('category_id')=="")?'selected':''}} value="">Nessuna categoria</option>
                    @foreach ($categories as $category)
                        <option {{(old('category_id')==$category->id)?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select> 
                @error('category_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>   
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" max="255" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="form-group mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="{{old('content')}}"></textarea>
                @error('content')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection