@extends('../layout/app')
@section('title', 'page d\'accueil')
@section('content')

<section class="menu__wrapper"><div class="menu__block">
    <h3>Clients</h3>
    <img src=""/>
    <a href="">Afficher tous les clients</a>
    <a href="">Créer un client</a>
</div>
<div class="menu__block">
    <h3>Factures</h3>
    <img src=""/>
    <a href="/invoices">Afficher tous les factures</a>
    <a href="/invoices/create">Créer un factures</a>
</div>
</section>

@endsection
