<section class="section-sm bg-primary">
    <!-- container -->
    <div class="container text-center text-sm-left">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-sm offset-md-1 mb-4 mb-md-0">
                <h6 class="title text-light">{{ $data["title"] }}</h6>
                <p class="m-0 text-light">{{ $data["description"] }}</p>
            </div>
            @isset($data["button"])
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-{{ $data["button_color"] }} rounded">{{ $data["button"] }}</button>
                </div>
            @endisset
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>