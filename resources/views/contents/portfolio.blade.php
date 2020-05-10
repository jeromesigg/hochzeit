<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-in">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Alle</li>
            @foreach ($albums as $album)
              <li data-filter=".filter-{{$album['name']}}">{{$album['name']}}</li>   
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($pictures as $picture)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$picture->album['name']}}">
            <div class="portfolio-wrap">
              <img src="{{$picture->photo->file}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{$picture->photo->file}}" data-gall="portfolioGallery" class="venobox" title="{{$picture->name}}"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>   
        @endforeach
      </div>
    </div>
  </section><!-- End Portfolio Section -->