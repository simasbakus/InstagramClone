@extends('layouts.app');

@section('content')

    <div class="container">
      <div class="row justify-content">
        <div class="col-md-8">

          <h1>Upload New Photo</h1>

          <form class="py-4" action="/home" method="post" enctype="multipart/form-data">
              <div class="form-group d-flex flex-column">
                <label for="choose-photo">Photo Preview</label>
                <img src="" alt="" class="choose-photo" style="height:100%; width:100%; display:none">
                <input type="file" name="photo" onchange="displayImage(this); displayIMG()" value="" class="photo">
                <div>
                  {{ $errors->first('photo') }}
                </div>
              </div>
              <div class="from-group">
                <label for="caption">Caption</label>
                <textarea name="caption" rows="4" cols="30" class="form-control">{{ old('caption') }}</textarea>
                <div>
                    {{ $errors->first('caption') }}
                </div>
              </div>
              <button type="submit" name="save" class="btn btn-primary">Save</button>
              @csrf
          </form>

          <a href="/home" class="btn btn-danger">Cancel</a>

        </div>
      </div>
    </div>

@endsection
