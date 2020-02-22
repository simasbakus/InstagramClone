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
                              <form class="card-text px-2 py-1" action="/userPhoto/{{ $photo->id }}" method="post">
                                @method('PATCH')
                                <input type="text" name="caption" value="{{ $photo->caption ?? null }}" class="caption-edit">
                                <button type="submit" name="button" class="btn btn-primary">Save</button>
                                @csrf
                              </form>
                          </div>
                    </div>

        </div>
    </div>
</div>
@endsection
