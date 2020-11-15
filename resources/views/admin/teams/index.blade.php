@extends('layouts.admin')

@section('content')
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header>      
                <h1 class="h3 display">Trauzeugen</h1>
            </header>
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Titel</th>
                        <th scope="col">Text</th>
                    </tr>
                </thead>
                <tbody>
                    @if($teams)
                    @foreach ($teams as $team)
                        <tr>
                            <td><img height="50" src="{{$team->photo ? $team->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
                            <td><a href="{{route('teams.edit', $team->id)}}">{{$team->name}}</a></td>
                            <td>{{$team->phone}}</td>
                            <td>{{$team->title}}</td>
                            <td>{{$team->description}}</td>
                        </tr>   
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                    {{$teams->render()}}
                </div>
            </div>
        </div>
    </section>
@endsection