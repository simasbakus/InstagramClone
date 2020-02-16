@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    {{-- @if (session('status'))
                    @endif --}}
                    <div class="row">
                      <img src="{{ asset('storage/uploads/' . Auth::user()->profilePic) }}" alt="" style="width:150px; height:150px">
                    </div>

        </div>
    </div>
</div>
@endsection
