@extends('layouts.app')
@section('content')
<section class="container">
    <h1 class="text-center">Your projects</h1>
    <a href="{{route('admin.projects.create')}}" class="btn btn-danger">Create new post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->content}}</td>\
                <td>{{$project->slug}}</td>\
                <td>
                    <a href="{{route('admin.projects.show', $project->slug)}}" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i>show</a>
                    <a href="{{route('admin.projects.edit', $project->slug)}}" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i>edit</a>
                    <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="delete-button border-0 bg-transparent"  data-item-title="{{ $project->title }}">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>




</section>
@endsection