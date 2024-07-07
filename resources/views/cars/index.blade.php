@unless (count($cars)==0)

    @foreach ($cars as $car)
        <h1><a href="/car/{{$car['id']}}">{{$car['car name']}}</a></h1>
        <p>{{$car['company']}}</p>
        <p>{{$car['year']}}</p>
        <p>{{$car['mileage']}}</p>
        <p>{{$car['price']}}</p>
    @endforeach

    @else 

    <p>No car found</p>
    
@endunless
