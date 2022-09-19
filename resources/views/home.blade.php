@extends('layouts.main')

@section('title', 'Home')




@section('main-content')


  @foreach($movies as $movie)

    <div class="card">

        <h1>
            {{$movie->title}}
        </h1>

        <h2>
            {{$movie->original_title}}
        </h2>

        <h3>
            {{$movie->nationality}}
        </h3>

    </div>

  @endforeach



@endsection