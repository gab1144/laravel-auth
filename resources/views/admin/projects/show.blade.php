@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>{{$project->name}}</h1>
            @if($project->cover_image)
                <img class="detail-img" src="{{asset('storage/'.$project->cover_image)}}" alt="{{$project->cover_image_original_name}}">
            @endif
            <div>Client name: <strong>{{$project->client_name}}</strong></div>
            <div>Summary: <strong>{{$project->summary}}</strong></div>
            <a class="btn btn-primary text-white" href="{{route('admin.projects.index', $project)}}" title="edit">Back to list</i></a>
            <a class="btn btn-warning text-white" href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
            @include('admin.partials.form-delete')
        </div>
    </main>
@endsection
