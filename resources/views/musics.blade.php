@extends('layout')

@section('music')

@unless (count($musics) == 0)
    
@foreach ($musics as $music)
    <h2>{{$music['music name']}}</h2>
    <h3>{{$music['singer']}}</h3>
    <p>{{$music['year']}}</p>
    <p>{{$music['description']}}</p>

@endforeach

    @else 

    <p>No music found</p>

@endunless

@endsection