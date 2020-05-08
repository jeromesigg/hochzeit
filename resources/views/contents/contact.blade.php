<section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        @if(Session::has('success'))
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        @endif
        <div class="col-lg-12">
          {!! Form::open(['method' => 'POST', 'action'=>'ContactsController@store']) !!}
            <div class="form-row">
              <div class="col-md-6 form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
              </div>
              <div class="col-md-6 form-group">
                {!! Form::label('email', 'E-Mail:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required', 'email']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('content', 'Nachricht:') !!}
              {!! Form::textarea('content', null, ['class' => 'form-control', 'required', 'rows'=>3]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Senden', ['class' => 'btn btn-primary'])!!}
          </div>
          {!! Form::close()!!}
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->