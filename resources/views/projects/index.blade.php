@extends('layout')

@section('content')
    not used
    <h1 class="title">All House Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li class="list-group-item">{{ $project->name }}</li>
        @endforeach
    </ul>
@endsection