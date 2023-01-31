@extends('layout.main-layout')
@section('content')
<main>
<div class="container">
    <h1>MOVIES</h1>
    @foreach ($movies as $movie)
    <div class="box">
        
        <div>
            <strong>Title :</strong> {{$movie -> title}}  
        </div>

        <div>
            <strong>Original Title : </strong> {{$movie -> original_title}} 
        </div>  

        <div>
            <strong>Nationality : </strong> {{$movie -> nationality}} 
        </div>

        <div>
            <strong>Release Date : </strong> {{$movie -> date}} 
        </div>

        <div>
            <strong>Vote : </strong> {{$movie -> vote}}
        </div>
        <br>
        <br>    
       </div>
    @endforeach
</div>
</main>

@endsection