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

        </div>
    </div>
</div>
@endsection
