@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <div class="row">
                      <img class="col-3" src="{{ asset('storage/uploads/' . $user->profilePic) }}" alt="" style="width:150px; height:150px; border-radius:50%">
                      <div class="col-9 d-flex flex-column align-items-end">
                          <h2 class="mr-2 mb-2 row">{{ $user->username }}</h2>
                          <h4 class="mr-2 my-2 row">Followers: {{ count($followers) }}</h4>
                      </div>
                    </div>


                        @if ($user->id == auth()->user()->id)
                          <div class="row my-4">
                            <a href="userPhoto/create" class="col-12 btn btn-primary">Upload New Photo</a>
                          </div>
                        @else
                          <form class="row my-4" action="/follow/{{ $user->id }}" method="post">
                            @csrf
                            <button type="submit" name="follow" class="col-12 row btn btn-primary">Follow</button>
                          </form>
                        @endif


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
