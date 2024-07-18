
<!-- portfolio section -->
<section class="section" id="portfolio">
    <div class="container text-center">
        <p class="section-subtitle">{{ $data["small_title"] }}</p>
        <h6 class="section-title mb-6">{{ $data["title"] }}</h6>
        <!-- row -->
        <div class="row">
            @foreach($item["modelData"] as $row)
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="{{ Voyager::image($row["image"]) }}" class="portfolio-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>{{ $row["name"] }}</h5>
                                <p class="font-weight-normal">{{ $row["description"] }}</p>
                            </span>                         
                        </span>                     
                    </a>
                </div>
            @endforeach
        </div><!-- end of row -->
    </div><!-- end of container -->
</section>