@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h1>Projects</h1>
        @foreach ($projects as $project)
        <div class="col-4 my-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$project->name}}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
