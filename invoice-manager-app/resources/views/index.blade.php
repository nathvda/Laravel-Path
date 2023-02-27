@extends('../layout/app')
@section('title', 'page d\'accueil')
@section('content')

<section class="menu__wrapper"><div class="menu__block">
    <h3>Clients</h3>
    <img class="menu__image" src="{{URL::asset('/images/clients.jpg')}}" alt="profile Pic" height="200" width="200">
    <a href="/clients">Afficher tous les clients</a>
    <a href="/clients/create">Créer un client</a>
</div>
<div class="menu__block">
    <h3>Factures</h3>
    <img class="menu__image" src="{{URL::asset('/images/invoices.jpg')}}" alt="profile Pic" height="200" width="200">
    <a href="/invoices">Afficher tous les factures</a>
    <a href="/invoices/create">Créer une facture</a>
</div>
</section>

@endsection
