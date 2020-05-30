<section id="photos" class="portfolio section section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      {{-- <div class="row portfolio-container" data-aos="fade-up"> --}}
      <div id="photos_table" class="row portfolio-container" data-aos="fade-up"> 
        @foreach ($pictures as $picture)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="{{$picture->photo->file}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{$picture->photo->file}}" data-gall="portfolioGallery" class="venobox" title="{{$picture->name}}"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            </div>   
        @endforeach
      </div>
      {{ $pictures->fragment('photos')->links() }}
       
    </div>
  </section><!-- End Portfolio Section -->