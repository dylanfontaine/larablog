@extends('layouts.page')

@section('content')
    <h1>Create a post</h1>
    <form method="POST" action="/posts">
        {{ csrf_field() }}

        @include('layouts.errors')

        <div class="form-group">
            <label for="postTitle">Title</label>
            <input required type="text" class="form-control" name="title" id="postTitle" aria-describedby="titleHelp" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="postBody">Body</label>
            <textarea  class="form-control" name="body" id="postBody" rows="5"></textarea>
        </div>

        <button type="submit" name="submit-post" class="btn btn-primary">Create Post</button>
    </form>

@endsection