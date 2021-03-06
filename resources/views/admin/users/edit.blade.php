@extends('layouts.admin')
@section('content')

    <section>
        <div class="container-fluid">
            <header> 
                <h1 class="h3 display">Benutzer bearbeiten</h1>
            </header>
            <div class="row">
                <div class="col-sm-6" >
                    {!! Form::model($user, ['method' => 'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('username', 'Name:') !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'required']) !!}
                    </div>                    
                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id', 'Rolle:') !!}
                        {!! Form::select('role_id', [''=>'Wähle Rolle'] + $roles, null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('active', 'Aktiv:') !!}
                        {!! Form::select('active', array(['1'=>'Aktiv', 0 => 'Nicht Aktiv']), null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Benutzer updaten', ['class' => 'btn btn-primary col-sm-6'])!!}
                    </div>
                    {!! Form::close()!!}
                    {!! Form::open(['method' => 'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Benutzer löschen', ['class' => 'btn btn-danger col-sm-6'])!!}
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