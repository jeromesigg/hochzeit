<section class="timeline" id="timeline">
  <div class="container">
    @foreach ($shedules as $shedule)
      <div class="timeline-item">
        <div class="timeline-img"></div>
        <div class="timeline-content timeline-card js--fadeInRight">
          <div class="timeline-img-header" style="background-image: url({{$shedule->photo->file}})">
            <h2>{{$shedule->title}}</h2>
          </div>
          <div class="date">{{$shedule->time}}</div>
          <p>{!! $shedule->body !!}</p>
        </div>
      </div>  
    @endforeach
  </div>
</section>