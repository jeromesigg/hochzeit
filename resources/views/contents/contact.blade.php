<section id="contact" class="contact section section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Kontakt</h2>
        <p> Schreibt uns, wenn ihr noch Fragen habt.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Unsere Adresse</h3>
            <p>Im Heidenkeller 7A, 8902 Urdorf</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>E-Mail</h3>
            <p>jerome.sigg@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Ruft uns an</h3>
            <p>079 587 56 51</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
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