@extends('../layout/app')
@section('title', 'créer une facture')

@section('content')

<form class="form--basic" method="POST" action="/invoices/create">
    @csrf
<h3>Créer une facture</h3>
<label for="reference">Référence</label>
    <input type="text" id="reference" name="ref"/>
    @if ($errors->has('ref'))
        <span class="error">{{$errors->first('ref')}}</span>
    @endif
    <label for="title">Titre</label>
    <input type="text" id="title" name="title"/>
    @if ($errors->has('title'))
        <span class="error">{{$errors->first('title')}}</span>
    @endif
    <label for="price">Prix</label>
    <input type="text" id="price" name="price"/>
    @if ($errors->has('price'))
        <span class="error">{{$errors->first('price')}}</span>
    @endif
    <label for="tva">tva</label>
    <input type="text" id="tva" name="tva"/>
    @if ($errors->has('tva'))
        <span class="error">{{$errors->first('tva')}}</span>
    @endif
    <label for="client">client</label>
    <input type="text" id="client" name="client"/>
    @if ($errors->has('client'))
        <span class="error">{{$errors->first('client')}}</span>
    @endif

    <button type="submit" value="submit">Créer la facture</button>
</form>
@endsection