@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="mb-3">
            <label for="title" class="form-label " >Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" > 
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" class="form-control @error('title') is-invalid @enderror" id="content" name="content" rows="3" >{{old('content')}}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
     
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}" required>
       
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
      
      
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>

@endsection