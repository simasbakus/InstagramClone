@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="row">
                        <img class="" src="{{ asset('storage/uploads/' . $user->profilePic) }}" alt="" style="width:150px; height:150px">
                      <div class="col">
                      </div>
                    </div>
                    <div class="row my-4">

                        @if ($user->id == auth()->user()->id)
                          <a href="userPhoto/create" class="col-12 btn btn-primary">Upload New Photo</a>
                        @else
                          <a href="#" class="col-12 btn btn-primary">Follow</a>
                        @endif

                    </div>
                    <div class="row pl-3">
                      @foreach ($userPhotos as $userPhoto)
                        <a href="/userPhoto/{{ $userPhoto->id }}">
                          <div class="card">
                              <div class="card-img-top">
                                <img src="{{ asset('storage/' . $userPhoto->photo) }}" alt="" style="heigth:150px; width:150px">
                              </div>
                              <div class="card-text pl-2 pt-1">
                                <p>{{ $userPhoto->caption }}</p>
                              </div>
                          </div>
                        </a>
                      @endforeach
                    </div>

        </div>
    </div>
</div>
@endsection
