@extends('../layout/app')
@section('title', 'Voir une facture')
@section('content')

<section class="show__box">
    <h2>{{$invoice->ref}}</h2>
    <p>{{$invoice->title}}</p>
    <p>{{$invoice->price}}€</p>
    <p>{{$invoice->tva}}%</p>
    <p>{{$invoice->total}}€</p>
    <p>{{$invoice->client}}€</p>
    <a href="/invoices">Liste des facture</a>
</section>

@endsection