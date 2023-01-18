@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 d-flex">
            <h1>Projects</h1> <a href="{{route('admin.projects.create')}}" class="add-button btn btn-primary"><i class="fa-solid fa-plus"></i></a>
        </div>
        @foreach ($projects as $project)
        <div class="col-md-6 col-lg-4 my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$project->name}}</h5>
                  <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                  @include('admin.partials.form-delete')
                </div>
            </div>
        </div>
        @endforeach
        {{$projects->links()}}
    </div>
</div>
@endsection
