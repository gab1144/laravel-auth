@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 d-flex">
            <h1>Projects</h1> <a href="{{route('admin.projects.create')}}" class="add-button btn btn-primary"><i class="fa-solid fa-plus"></i></a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome progetto</th>
                <th scope="col">Nome cliente</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{$project->id}}</th>
                        <td>{{$project->name}}</td>
                        <td>{{$project->client_name}}</td>
                        <td><a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning " href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil text-white"></i></a>
                        @include('admin.partials.form-delete')
                        </td>
                    <tr>
                @endforeach
            </tbody>
          </table>


        {{$projects->links()}}
    </div>
</div>
@endsection
