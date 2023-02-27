@extends('../layout/app')
@section('title', 'Voir un client')
@section('content')

<section class="show__box">
    <h2>{{$client->society}}</h2>
    <p>{{$client->phone}}</p>
    <p>{{$client->email}}</p>
    <p>{{$client->tva}}</p>
    <a href="/clients">Liste des clients</a>
</section>

@endsection