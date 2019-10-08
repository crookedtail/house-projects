@extends('layout')

@section('content')
    <h1 class="title">{{ $project->name }}</h1>
    <p class="subtitle">{{ $project->name }}</p>

    <div class="box">
        <p>
            {{ $project->description }}
        </p>
        <ul>
            <li><b>Priority:</b> {{ $project->priority }}</li>
            <li><b>Fire-safe:</b> {{ $project->fire_safe }}</li>
            <li><b>Lead:</b> {{ $project->user->name }}</li>
            <li><b>Estimate:</b> {{ $project->estimate }}</li>
            <li><b>Created At:</b> {{ $project->created_at }}</li>
        </ul>
    </div>
    <p>
        <a href="/house-projects/public/projects/{{ $project->id }}/edit">Edit</a>
    </p>

@endsection