@extends('layouts.admin')
@section('content')

    @include('includes.tinyeditor')
    <section>
        <div class="container-fluid">
            <header> 
                <h1 class="h3 display">Geschenk bearbeiten</h1>
            </header>
            <div class="row">
                <div class="col-sm-3" >
        
                    <img src="{{$gift->photo ? $gift->photo->file : 'http://placehold.it/350x350'}}" alt="" class="img-responsive" style="max-width: -webkit-fill-available;">
                </div> 
                <div class="col-sm-9">
                    {!! Form::model($gift, ['method' => 'PATCH', 'action'=>['AdminGiftsController@update', $gift->id], 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Beschreibung:') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>3]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('subline', 'Schlusstext:') !!}
                        {!! Form::text('subline', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('amount', 'Betrag:') !!}
                        {!! Form::text('amount', null, ['class' => 'form-control', 'rows'=>3]) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::label('photo_id', 'Photo (quadratisch):') !!}
                            {!! Form::file('photo_id', null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Geschenk updaten', ['class' => 'btn btn-primary col-sm-6'])!!}
                    </div>
                    {!! Form::close()!!}
                    {!! Form::open(['method' => 'DELETE', 'action'=>['AdminGiftsController@destroy', $gift->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Geschenk löschen', ['class' => 'btn btn-danger col-sm-6'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>   
            </div>   
            <div class="row"> 
                @include('includes.form_error')
            </div>   
        </div>
    </section>
</div>
@endsection