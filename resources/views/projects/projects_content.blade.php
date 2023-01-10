@extends('layout_main')

@section('title',config('app.shortName')  . '-projects')

@section('links')
<link rel="stylesheet" href={{ asset('css/projects/projectsStyles.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')

    @include('projects.projects_nav')


    <ul>
    @foreach ($projects as $project)

    <li>
        {{$project->name}}
    </li>

    @endforeach
    </ul>


@endsection
