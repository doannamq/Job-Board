@unless (count($movies) == 0)

@foreach ($movies as $movie)

    <h2><a href="/movie/{{$movie['id']}}">{{$movie['movie name']}}</a></h2>
    <p>{{$movie['description']}}</p>
    <p>{{$movie['tags']}}</p>

@endforeach

@else

<p>No film found</p>
    
@endunless
