@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">

        <header> 
            <h1>Anfragen</h1>
        </header>
    
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="10%">Von</th>
                        <th scope="col" width="10%">E-Mail</th>
                        <th scope="col" width="70%">Text</th>
                        <th scope="col" width="10%">Erstellt</th>
                    </tr>
                </thead>
                <tbody>
                    @if($contacts)
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td><a target="blank" href="mailto:{{$contact->email}}">{{$contact->email}}</a></td>
                            <td>{{$contact->content}}</td>
                            <td>{{$contact->created_at ? $contact->created_at->diffForHumans() : 'Kein Datum'}}</td>
                        </tr>   
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">
                    {{$contacts->render()}}
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection