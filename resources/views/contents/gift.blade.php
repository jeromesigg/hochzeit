<section id="gifts" class="portfolio section">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Geschenk-Tisch</h2>
        <p>Nach der Hochzeit gehen wir auch schon bald auf unsere Hochzeitsreise. Dabei werden wir eine Safari unternehmen und Stefanies Lieblingstiere in der
          freien Wildbahn sehen und anschliessend noch eine Woche am Meer verbringen. <br>
          Falls ihr uns etwas schenken möchtet, würden wir uns freuen, wenn ihr etwas zu dieser Reise beiträgt.</p>
      </div>
      <div class="row">
        @foreach ($gifts as $gift)
          <div class="col-xs-6 col-md-4">
          <div class="card card-inverse"><img src="{{$gift->photo->file}}" alt="Card image" class="card-img img-fluid">
              <div class="card-img-overlay card-img-overlay-opacity">
                <h5 class="card-title">{{$gift->name}}</h5>
                <p class="card-text">{!! $gift->description !!}</p>
                {{-- <p class="card-text"><small>{{$gift->subline}}</small></p> --}}
              </div>
              @if($gift['amount'])
                <div class="card-body">
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$gift->paid}}" aria-valuemin="0" aria-valuemax="{{$gift->amount}}" style="width: {{$gift->paid/$gift->amount*100}}%">{{$gift->paid/$gift->amount*100}}%</div>
                  </div>
                </div>
              @endif
            </div>
          </div>        
        @endforeach

      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12">
          {!! Form::open(['method' => 'POST', 'action'=>'GuestGiftController@store']) !!}
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
              <div class="col-md-4 form-group">
                {!! Form::label('gift_id', 'Geschenk:') !!}
                {!! Form::select('gift_id', [''=>'Wähle das Geschenk'] + $gifts_select, null, ['class' => 'form-control', 'required']) !!}
              </div>   
              <div class="col-md-2 form-group">
                {!! Form::label('amount', 'Betrag:') !!}     
                {!! Form::number('amount', null, ['class' => 'form-control', 'required']) !!}

            </div>     
            </div>
            <div class="form-group">
              {!! Form::label('content', 'Bemerkung:') !!}
              {!! Form::textarea('content', null, ['class' => 'form-control', 'rows'=>3]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Senden', ['class' => 'btn btn-primary'])!!}
          </div>
          {!! Form::close()!!}
          </form>
        </div>
      </div>
   
       
    </div>
  </section><!-- End Portfolio Section -->