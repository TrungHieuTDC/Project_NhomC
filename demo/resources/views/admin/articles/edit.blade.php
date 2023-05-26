@extends('layouts.layout')
@section('addarticle')

<div class="container">
    
    <form action="{{ route('article.update', ['article' => $article->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit Article</h1>
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" aria-valuetext="{{$article->content}}" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select category</option>
            @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
  </div>
@endsection


