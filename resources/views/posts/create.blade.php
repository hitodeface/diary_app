@extends('user')

@section('styles')
<link href="/css/post.css" rel="stylesheet">
@endsection

@section('right-side')
<form method="post" action="{{ route('posts.create') }}" enctype="multipart/form-data">
 @csrf
    <div class="post-form">
        <div class="form-title">
            <input class="form-control" type="text" placeholder="Title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-body">
            <textarea class="form-control" type="text" name="body" cols="50" rows="10">{{ old('body') }}</textarea>        
        </div>

        <div class="form-language">
        <select name="language" class="form-control">
          <option selected="selected" value="{{ old('language') }}">Language</option>
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
            <input id="image" class="file" type="file"  name="image" accept="image/png,image/jpeg,image/gif,image/jpg">
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
    </div>


    <script>
    function previewImage(obj)
    {
        var fileReader = new FileReader();
        fileReader.onload = (function() {
        document.getElementById('image').src = fileReader.result;
        });
        fileReader.readAsDataURL(obj.files[0]);
    }
    </script>
</form>
@endsection