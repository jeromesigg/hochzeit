<section id="story" class="story section section-bg">
    <div class="container-story">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Geschichte</h2>
            <p>Hier unsere gemeinsame Geschichte.</p>
        </div>
        <div class="story">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($stories as $story)
                        <div class="swiper-slide" style="background-image: url({{$story->photo ? $story->photo->file : 'http://placehold.it/1900x600'}})" data-year="{{$story->year}}">
                            <div class="swiper-slide-content"><span class="story-year">{{$story->year}}</span>
                                <h4 class="story-title">{{$story->title}}</h4>
                                <p class="story-text">{!! $story->content !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->