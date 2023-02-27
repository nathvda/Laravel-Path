@extends('../layout/app')
@section('title', 'clients')
@section('content')
<section class="display__table"><h3>Mes clients</h3>
    <p>Dans cette section, vous pouvez voir la liste de vos  clients</p>
<table class="table--basic"><tr><th>#</th><th>Société</th><th>Téléphone</th><th>Email</th><th>TVA</th><th>Modifier</th><th>Supprimer</th></tr>
@foreach($clients as $client)
<tr>
    <td>{{$client->id}}</td>
    <td><a href="/clients/show/{{$client->id}}">{{$client->society}}</a></td>
    <td>{{$client->phone}}</td>
    <td>{{$client->email}}</td>
    <td>{{$client->tva}}</td>
    <td><a href="./clients/edit/{{$client->id}}">Modifier</a></td>
    <td><form method="post" action="./clients/delete/{{$client->id}}">@csrf
    @method('delete')
    <button type="submit">Supprimer</button></form></td>
</tr>
@endforeach
</table>
<a href="/clients/create">Créer un client</a>
<a href="/">Retour à l'accueil </a>
</section>
@endsection