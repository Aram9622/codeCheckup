<section class="section" id="service">
    <div class="container text-center">
        <p class="section-subtitle">{{ $data["small_title"] }}</p>
        <h6 class="section-title mb-6">{{ $data["title"] }}</h6>
        <!-- row -->
        <div class="row">
            @foreach($item["modelData"] as $row)
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ Voyager::image($row["image"]) }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">{{ $row["name"] }}</h6>
                            <p class="subtitle">{{ $row["description"] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- end of row -->
    </div>
</section>