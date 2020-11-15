@extends('layouts.admin')

@section('content')
    <section>
        <div class="container-fluid">

            <header> 
                <h1>Erhaltene Geschenke</h1>
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Geschenk</th>
                        <th scope="col">Betrag</th>
                        <th scope="col">Bemerkung</th>
                    </tr>
                </thead>
                <tbody>
                    @if($guestgifts)
                    @foreach ($guestgifts as $guestgift)
                        <tr>
                            <td>{{$guestgift->name}}</a></td>
                            <td>{{$guestgift->firstname}}</a></td>
                            <td>{{$guestgift->email}}</td>
                            <td>{{$guestgift->gift['name']}}</td>
                            <td>{{$guestgift->amount}}</td>
                            <td>{{$guestgift->content}}</td>
                        </tr>   
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                    {{$guestgifts->render()}}
                </div>
            </div>
        </div>
    </section>
@endsection