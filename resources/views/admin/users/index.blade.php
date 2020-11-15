@extends('layouts.admin')

@section('content')
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header>      
                            <h1 class="h3 display">Benutzer</h1>
            </header>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Rollen</th>
                        <th scope="col">Administrator</th>
                        <th scope="col">Geladen</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="{{route('users.edit', $user->id)}}">{{$user->username}}</a></td>
                            <td>{{$user->role['name']}}</td>
                            <td>{{$user->isAdmin() ? 'Ja' : 'Nein'}}</td>
                            <td>{{$user->isInvited() ? 'Ja' : 'Nein'}}</td>
                        </tr>   
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                    {{$users->render()}}
                </div>
            </div>
        </div>
    </section>
@endsection