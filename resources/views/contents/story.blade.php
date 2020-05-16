<section id="testimonials" class="testimonials section-bg">
    <div class="container-timeline">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Geschichte</h2>
            <p>Hier unsere gemeinsame Geschichte.</p>
        </div>
        <div class="timeline">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($stories as $story)
                        <div class="swiper-slide" style="background-image: url({{$story->photo->file}})" data-year="{{$story->year}}">
                            <div class="swiper-slide-content"><span class="timeline-year">{{$story->year}}</span>
                                <h4 class="timeline-title">{{$story->title}}</h4>
                                <p class="timeline-text">{!! $story->content !!}</p>
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