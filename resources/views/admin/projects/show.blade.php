@extends('layouts.app')
@section('title', $projects->title)
@section('content')
<section class="my-2">
    <h1>{{$projects->title}}</h1>
    <hr>
    <div>{{$projects->content}}</div>
    <hr>
    <div>{{$projects->slug}}</div>
    <div class="d-flex justify-content-end">
        <div>
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-sm">Return</a>
        </div>
    </div>
</section>
@endsection