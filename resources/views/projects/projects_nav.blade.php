<nav class="projects_nav">
                
    @foreach ($projects as $project)
        <a href="{{ url('projects#'. $project->id) }}">
            {{$project->id . '. ' . $project->name}}
        </a>
    @endforeach
</nav>