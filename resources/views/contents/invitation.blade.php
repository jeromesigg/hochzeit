<section id="invitation" class="invitation section">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Anmeldung</h2>
        <p> Gebt uns hier bescheid, ob ihr dabei seid oder nicht ...</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12">
          {!! Form::open(['method' => 'POST', 'action'=>'InvitationsController@store']) !!}
            <div class="form-row">
              <div class="col-md-6 form-group">
                {!! Form::label('firstname', 'Vorname:') !!}
                {!! Form::text('firstname', null, ['class' => 'form-control', 'required']) !!}
              </div>
              <div class="col-md-6 form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
              </div>
              
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                {!! Form::label('email', 'E-Mail:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required', 'email']) !!}
              </div>   
              <div class="col-md-6 form-group">
                {!! Form::label('response_id', 'Antwort:') !!}
                {!! Form::select('response_id', [''=>'Wähle Antwort'] + $responses, null, ['class' => 'form-control', 'required']) !!}
            </div>     
            </div>
            <div class="form-group">
              {!! Form::label('content', 'Nachricht:') !!}
              {!! Form::textarea('content', null, ['class' => 'form-control', 'required', 'rows'=>3, 'placeholder' => 'Zusätzliche Personen, Allergien, Sonstige Anliegen']) !!}
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