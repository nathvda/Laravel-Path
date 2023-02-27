<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($restaurants as $restaurant)

    <div class="restaurant"><h4>{{$restaurant->name}}</h4>
    <h5>{{$restaurant->adress}}</h5>
    <p>{{$restaurant->description}}</p>
    <p>{{$restaurant->town}} - {{$restaurant->zipCode}}</p>
    <a href="/restaurant/show/{{$restaurant->id}}">See Page</a>
    @for($i = 0; $i < 5; $i++)
    @if($i < $restaurant->review)
    O
    @else
    x
    @endif
    @endfor
    </div>



@endforeach
</body>
</html>