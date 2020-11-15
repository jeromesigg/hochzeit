@extends('layouts.admin')

@section('content')
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header> 
                <h1 class="h3 display">Antwort-Möglichkeiten</h1>
            </header>
            <div class="row">
                <div class="col-sm-3">
                    {!! Form::open(['action'=>'AdminResponsesController@store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('invited', 'Wer darf es sehen:') !!}
                            {!! Form::select('invited', array(0 => "Alle Gäste", 1 => "Nur geladene Gäste"), null,  ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Antwort erstellen', ['class' => 'btn btn-primary'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>  
                <div class="col-sm-3">
                    @if ($responses)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Geladene Gäste</th>
                                </tr>
                            </thead>
                        @foreach ($responses as $response)
                            <tbody>
                                <tr>
                                    <td><a href="{{route('responses.edit',$response->id)}}">{{$response->name}}</a></td>
                                    <td>{{$response->invited ? 'Ja' : 'Nein'}}</td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">
                                {{$responses->render()}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection