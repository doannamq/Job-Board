@extends('layout')

@section('desk')

@unless (count($desks) == 0)
    @foreach ($desks as $desk)
        <h2><a href="/desk/{{$desk['id']}}">{{$desk['desk name']}}</a></h2>
        <p>{{$desk['company']}}</p>
        <p>{{$desk['year']}}</p>
        <p>{{$desk['description']}}</p>
    @endforeach
    @else
        <p>No desk found</p>
@endunless
    
@endsection