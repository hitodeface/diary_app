@extends('user')

@section('styles')
<link href="/css/post.css" rel="stylesheet">
@endsection

@section('right-side')
<form method="post" action="{{ route('posts.update') }}" enctype="multipart/form-data">
    <div class="post-form">
        {{ csrf_field() }}
        @method('PATCH')
        <h4>Edit post</h4>

        <div class="form-title">
            <input class="form-control" type="text" placeholder="Title" name="title" value="{{ $post->title }}">
        </div>

        <div class="form-body">
            <textarea class="form-control" type="text" name="body" cols="50" rows="10">{{ $post->body }}</textarea>        
        </div>

        <div class="form-language">
        <select name="language" class="form-control">
          <option value="{{ $post->language }}">Language</option>
          <option value="English">English</option>
          <option value="German">German</option>
          <option value="French">French</option>
          <option value="Spanish">Spanish</option>
          <option value="Portuguese">Portuguese</option>
          <option value="Russian">Russian</option>
          <option value="Japanese">Japanese</option>
          <option value="Chinese">Chinese</option>
          <option value="Corean">Corean</option>
        </select>
        </div>


        <p>Image</p>
        <label for="image" class="btn">
            <input id="image" type="file"  name="image">
        </label>
        <br>

        <div class="form-state">
            <p>
                <input type="radio" name="state" value="0" checked="checked"> Public
                <input type="radio" name="state" value="1"> Private
            </p>
        </div>

        <div class="form-submit">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>

        <input type='hidden' name='id' value='{{ $post->id }}'><br>
    </div>
</form>
@endsection