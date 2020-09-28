<section id="team" class="team section">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Trauzeugen</h2>
        <p>Unsere Trauzeugen helfen uns fleissig bei den Vorbereitungen und werden durch den Tag führen. Bei Fragen dürft ihr euch auch gerne bei ihnen melden.</p>
      </div>

      <div class="row">
        @foreach ($teams as $team)
          <div class="col-lg-6 col-md-6">

            <div class="member" data-aos="fade-up">
              <div class="member-info">
                <span>{{$team->title}}</span>
                <h4>{{$team->name}} </h4>
                <h6> <a href="tel:{{$team->phone}}">{{$team->phone}}</a></h6>
                <div class="social">
                  {!! $team->description !!}
                </div>
              </div>
              <div class="pic"><img src="{{$team->photo ? $team->photo->file : 'http://placehold.it/50x50'}}" class="img-fluid" alt=""></div>
              
            </div>
          </div>    
        @endforeach
      </div>
    </div>
  </section><!-- End Team Section -->