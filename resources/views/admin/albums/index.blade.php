@extends('layouts.admin')

@section('content')
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header> 
                <h1 class="h3 display">Album</h1>
            </header>
            <div class="row">
                <div class="col-sm-3">
                    {!! Form::open(['action'=>'AdminAlbumsController@store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Album erstellen', ['class' => 'btn btn-primary'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>  
                <div class="col-sm-3">
                    @if ($albums)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                        @foreach ($albums as $album)
                            <tbody>
                                <tr>
                                    <td><a href="{{route('albums.edit',$album->id)}}">{{$album->name}}</a></td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">
                                {{$albums->render()}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection