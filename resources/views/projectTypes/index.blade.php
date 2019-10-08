@extends('layout')

@section('content')
    <h1 class="title">All House Projects by Type</h1>
    <div class="box">
        <ul>
            @foreach ($projectTree as $projectType)
                <li class="list-group-item project-type-list-item">{{ $projectType->name }}</li>
                @if($projectType->has('projects'))
                    <ul>
                        @foreach ($projectType->projects as $project)
                            <li class="list-group-item project-list-item">
                                <a href="/house-projects/public/projects/{{ $project->id }}">{{ $project->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>

    <h1 class="title">All House Projects by Lead</h1>
    <div class="box">
        <ul>
            @foreach ($userTree as $user)
                <li class="list-group-item project-type-list-item">{{ $user->name }}</li>
                @if($user->has('projects'))
                    <ul>
                        @foreach ($user->projects as $project)
                            <li class="list-group-item project-list-item">
                                <a href="/house-projects/public/projects/{{ $project->id }}">{{ $project->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>

    {{--<a href="/house-projects/public/projects/create" class="button is-link">Create a Project</a>--}}

@endsection