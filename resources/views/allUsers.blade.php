@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @foreach ($users as $user)
                      <a href="/user/{{ $user->id }}" class="row my-2">
                          <img class="col-1" src="{{ asset('storage/uploads/' . $user->profilePic) }}" alt="" style="border-radius:50%">
                          <h5 class="col">{{ $user->username }}</h5>
                      </a>
                    @endforeach

        </div>
    </div>
</div>
@endsection
