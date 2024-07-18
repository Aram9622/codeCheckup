<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        {{-- @dd($data) --}}
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="{{ Voyager::image($item["media"]) }}" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            </div>
            <div class="about-caption">
                <p class="section-subtitle">{{ $data["sub_title"] }}</p>
                <h2 class="section-title mb-3">{{ $data["title"] }}</h2>
                <p>{{ $data["description"] }}</p>
                <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
            </div>              
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section>