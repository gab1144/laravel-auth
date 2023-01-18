@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>Add a new Project</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
          @error('name')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="client_name" class="form-label">Client name</label>
          <input type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" id="client_name" value="{{old('client_name')}}">
          @error('client_name')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" id="summary" cols="30" rows="10">{{old('summary')}}</textarea>
            @error('summary')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
          </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input type="text" class="form-control" name="cover_image" id="cover_image" value="{{old('cover_image')}}">
            @error('cover_image')
            <div class="invalid-feedback">
                {{$message}}
             </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add to list</button>
    </form>
</div>

@endsection