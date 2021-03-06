<section id="invitation" class="invitation section">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Anmeldung</h2>
        <p> Gebt uns hier Bescheid, ob ihr dabei seid oder nicht.</p>
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
              <div class="col-md-2 form-group">
                {!! Form::label('amount', 'Anzahl:') !!}
                {!! Form::text('amount', null, ['class' => 'form-control', 'required']) !!}
              </div>   
              <div class="col-md-4 form-group">
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
              {!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>3, 'placeholder' => 'Zusätzliche Personen, Vegetarier, Allergien, Sonstige Anliegen']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Senden', ['class' => 'btn btn-primary'])!!}
          </div>
          {!! Form::close()!!}
          </form>
        </div>
        
        @if(Auth::user()->isInvited())
        <div class="col-lg-12" style="text-align: center">
          <h3>Hotel</h3>
          <p>Da wir gerne bis spät in die Nacht mit euch feiern wollen, lohnt es sich ein Hotelzimmer zu buchen. Im Hotel "Zentrum Neu-Schönstatt" haben 
            wir ein Kontigent an Zimmern für euch vorreserviert. Für die definitive Reservation seid ihr selber zuständig, ihr müsst bei der Buchung das 
            Zauberwort "Hochzeit Stefanie und Jérôme" erwähnen. Buchungen können unter der Nummer <a href="tel:+41 81 511 02 00">+41 81 511 02 00</a> vorgenommen werden. <br> Den Shuttle vom
            und zum Hotel wird von uns organisiert.
          </p>
          
        </div>
        @endif
        
      </div>

    </div>
  </section><!-- End Contact Section -->