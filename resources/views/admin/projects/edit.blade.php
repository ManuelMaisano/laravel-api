@extends('layouts.app')
@section('title', $projects->title)
@section('content')
<section>
  <div class="container my-2">
    <h1>Edit project: {{$projects->title}}</h1>
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$projects->title}}">
      </div>
      @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{$projects->content}}">
      </div>
      <div class="py-2">
      <button type="submit" class="btn btn-primary">Modify</button>
      <a href="{{route('admin.projects.index')}}" class="btn btn-secondary">Return</a>
      </div>
    </form>
  </div>
</section>
@endsection