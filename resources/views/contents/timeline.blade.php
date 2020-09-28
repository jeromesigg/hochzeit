<section id="timeline" class="section">
  <div class="section-title" data-aos="fade-in" data-aos-delay="100">
    <h2>Zeitplan</h2>
</div>


  <div class="timeline">
    @foreach ($shedules as $shedule)
      <div class="timeline-item">
        <div class="timeline-img">
          <span class="timeline-icon">
            <i class="{{$shedule->icon}}"></i>
          </span>
        </div>
        <div class="timeline-content timeline-card js--fadeInRight">
          <div class="timeline-img-header" style="background-image: url({{$shedule->photo ? $shedule->photo->file : 'http://placehold.it/600x400'}})">
            
         
          <div class="date">{{$shedule->time}}</div>
          <div class="timeline-text">
            <h2>{{$shedule->title}}</h2>
            <p>{!! $shedule->content !!}</p>
            @if ($shedule->location_id)
              <a class="scrollto" href="#location_{!! $shedule->location_id !!}" >Karte</a>    
            @endif
          </div>
        </div>
          
        </div>
      </div>  
    @endforeach

  </div>
</section>