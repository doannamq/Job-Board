@unless (count($watches) == 0)

    @foreach ($watches as $watch)
        <h2><a href="/watch/{{$watch['id']}}">{{$watch['watch name']}}</a></h2>
        <p>{{$watch['company']}}</p>
        <p>{{$watch['price']}}</p>
        <p>{{$watch['description']}}</p>
    @endforeach
    
    @else

    <p>No watch found</p>

@endunless