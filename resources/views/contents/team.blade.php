<section id="team" class="team section section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Trauzeugen</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        @foreach ($teams as $team)
          <div class="col-lg-6 col-md-6">

            <div class="member" data-aos="fade-up">
              <div class="member-info">
                <span>{{$team->title}}</span>
                <h4>{{$team->name}}</h4>
                <div class="social">
                  {!! $team->description !!}
                </div>
              </div>
              <div class="pic"><img src="{{$team->photo->file}}" class="img-fluid" alt=""></div>
              
            </div>
          </div>    
        @endforeach
      </div>
    </div>
  </section><!-- End Team Section -->