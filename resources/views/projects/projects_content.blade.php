@extends('layout_main')

@section('title',config('app.shortName')  . '-projects')

@section('links')
<link rel="stylesheet" href={{ asset('css/projects/projectsStyles.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')
<div class="project_content">

    <?php $i = 1 ?> {{-- used also in included nav --}}

    
        @include('projects.projects_nav')


        <h1 style="color: red">!! STRÁNKA JE VE VÝSTAVBĚ !!</h1>

        <h1>Projekty</h1>

        <section class="projects_header">
            Na této stránce přibližuji projekty, které jsem vytvořil.
            <h4>POPIS ...</h4>
            V popisu je uvedeno o co se jedná a k čemu to slouží.

            <h4>SOUČÁSTÍ JE ...</h4>
            V této části uvádím některé trochu zajímavější součásti aplikace. 
        </section>


        @foreach ($projects as $project)

            <article>
                <h2 id="No{{$i}}">{{ $i . '. ' . $project->name}}</h2>

                <h4>POPIS ...</h4>
                    <p>
                        {!! $project->description !!}
                    </p>
                    <p>
                        {!! $project->content !!}
                    </p>

                <h4>SOUČÁSTÍ JE ...</h4>
                    @include('projects.project_' . str_replace(" ", "_", $project->name))

            </article>

            <?php $i++ ?>
        @endforeach

</div>

@endsection
