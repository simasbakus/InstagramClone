@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    {{-- @if (session('status'))
                    @endif --}}
                    <div class="row">
                        <img class="" src="{{ asset('storage/uploads/' . Auth::user()->profilePic) }}" alt="" style="width:150px; height:150px">
                      <div class="col">
                      </div>
                    </div>
                    <div class="row my-2">

                        <a href="uploadPhoto/create" class="col-12 btn btn-primary">Upload New Photo</a>

                    </div>
                    <div class="row">
                      @foreach ($userPhotos as $userPhoto)
                        <img src="{{ asset('storage/' . $userPhoto->photo) }}" alt="">
                      @endforeach
                    </div>

        </div>
    </div>
</div>
@endsection
