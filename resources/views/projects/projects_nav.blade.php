<nav class="projects_nav">

    
    {{--  $i is initialed in section content --}}
    
    @foreach ($projects as $project)

        <a class="no_underline" href="{{ url('#No'. $i) }}">
            {{$i . '. ' . $project->name}}
        </a>

        <?php $i++ ?>
    @endforeach
</nav>