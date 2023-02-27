@extends('../layout/app')
@section('title', 'invoices')
@section('content')
<section class="display__table"><h3>Mes factures</h3>
    <p>Dans cette section, vous pouvez voir la liste de vos factures clients</p>
<table class="table--basic"><tr><th>#</th><th>Réf</th><th>Titre</th><th>Prix</th><th>TVA</th><th>Client</th><th>Modifier</th><th>Supprimer</th></tr>
@foreach($invoices as $invoice)
<tr>
    <td>{{$invoice->id}}</td>
    <td>{{$invoice->ref}}</td>
    <td>{{$invoice->title}}</td>
    <td>{{$invoice->price}}€</td>
    <td>{{$invoice->tva}}%</td>
    <td>{{$invoice->client}}</td>
    <td><a href="./invoices/edit/{{$invoice->id}}">Modifier</a></td>
    <td><form method="post" action="./invoices/delete/{{$invoice->id}}">@csrf
    @method('delete')
    <button type="submit">Supprimer</button></form></td>
</tr>
@endforeach
</table>
<a href="/invoices/create">Créer une facture</a>
</section>
@endsection