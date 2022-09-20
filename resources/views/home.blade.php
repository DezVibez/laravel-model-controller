@extends('layouts.main')

@section('title', 'Home')




@section('main-content')

<div class="flex-container">

    @foreach($movies as $movie)

    <div class="card">
    
        <h1 class="fs-2 fw-bold">
            {{$movie->title}}
        </h1 >
    
        <h2 class="fs-4 my-3">
            {{$movie->original_title}}
        </h2>
    
        <h3 class="fs-5 fst-italic">
            <span>
               Original Language: {{$movie->nationality}}
            </span>  
              
            
        </h3>
    
    </div>


    @endforeach

        
        
        
    </div>


@endsection