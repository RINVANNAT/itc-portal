<section class="section projects-section">
    <h2 class="section-title">
        <i class="fa fa-archive"></i>Projects
    </h2>
    <div class="intro">
        <p>You can list your side projects or open source libraries in this section. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum
            fringilla a eu lectus.</p>
    </div><!--//intro-->


    @foreach($resume->projects as $project)


        <div class="item">
            <span class="project-title">
                <a href="#hook">{{ $project->name }}</a>
            </span> -
            <span class="project-tagline">{{ $project->description }}</span>
        </div><!--//item-->

    @endforeach

</section><!--//section-->