<section id="story" class="section section-bg">
    <div class="container-story">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Geschichte</h2>
            <p>Hier unsere Geschichte.</p>
        </div>
        <div class="story">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    @foreach ($stories as $story)
                        <div class="swiper-slide" style="background-image: url({{$story->photo ? $story->photo->file : 'http://placehold.it/1900x600'}})" data-year="{{Carbon\Carbon::parse($story->date)->formatLocalized('%d.%m.%Y')}}">
                            <div class="swiper-slide-content"><span class="story-year">{{Carbon\Carbon::parse($story->date)->formatLocalized('%d.%m.%Y')}}</span>
                                <h4 class="story-title">{{$story->title}}</h4>
                                <p class="story-text">{!! $story->content !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    @foreach ($stories as $story)
                        <div class="swiper-slide" style="background-image: url({{$story->photo ? $story->photo->file : 'http://placehold.it/1900x600'}})" data-year="{{Carbon\Carbon::parse($story->date)->formatLocalized('%d.%m.%Y')}}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
