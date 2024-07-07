@unless (count($laptops) == 0)

    @foreach ($laptops as $laptop)
        <h1><a href="/laptop/{{$laptop['id']}}">{{$laptop['laptop name']}}<a></h1>
        <p>{{$laptop['company']}}</p>
        <p>{{$laptop['year']}}</p>
    @endforeach

    @else 
        <p>No laptop found</p>

@endunless