@extends('layouts.adminapp')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h3>HOmee</h3>
@endsection
