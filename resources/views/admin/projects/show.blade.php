@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h1>{{$project->name}}</h1>
            <img class="detail-img" src="{{$project->cover_image}}" alt="{{$project->name}}">
            <div>Client name: <strong>{{$project->client_name}}</strong></div>
            <div>Summary: <strong>{{$project->summary}}</strong></div>
            </div>
        </div>
    </main>
@endsection
