@extends('layouts.app')
@section('content')
<section class="container text-center">
        <h1>My projects  page</h1>
        <p>Here i'll publish  my projects</p>
        <div class="text-center">
        <a href="{{route('admin.projects.index')}}" class="btn btn-success">Go to your projects</a>
    </div>
@endsection
@section('index')

@endsection
