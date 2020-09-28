@extends('layouts.admin')

@section('content')
<section>
    <div class="container-fluid">
        <!-- Page Header-->
        <header> 
            <h1 class="h3 display">Unsere Geschichte</h1>
        </header>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col" style="width: 10%">Datum</th>
                    <th scope="col">Titel</th>
                    <th scope="col">Text</th>
                </tr>
            </thead>
            <tbody>
                @if($stories)
                    @foreach ($stories as $story)
                        <tr>
                            <td><img height="50" src="{{$story->photo ? $story->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
                            <td>{{\Carbon\Carbon::parse($story->date)->formatLocalized('%d.%m.%Y')}}</td>
                            <td><a href="{{route('stories.edit', $story->id)}}">{{$story->title}}</a></td>
                            <td>{{$story->content}}</td>
                        </tr>   
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$stories->render()}}
            </div>
        </div>
    </div>
</section>
@endsection