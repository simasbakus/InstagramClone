@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="row justify-content-center">
                          <div class="card">
                              <div class="card-img-top">
                                <img src="{{ asset('storage/' . $photo->photo) }}" alt="">
                              </div>
                              <div class="card-text px-2 py-1">
                                <p>{{ $photo->caption }}</p>
                              </div>
                          </div>
                    </div>
                    <div class="row my-2">
                      <a href="/userPhoto/{{ $photo->id }}/edit" class="btn btn-primary">Edit Caption</a>
                    </div>
                    <form class="row" action="/userPhoto/{{ $photo->id }}" method="post">
                      @method('DELETE')
                      <button type="submit" name="button" class="btn btn-danger">Delete</button>
                      @csrf
                    </form>

        </div>
    </div>
</div>
@endsection
