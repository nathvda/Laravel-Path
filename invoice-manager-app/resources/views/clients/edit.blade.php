@extends('../layout/app')
@section('title', 'modifier un client')

@section('content')

<form class="form--basic" method="POST" action="/clients/edit/{{$client->id}}">
    @csrf
    @method('patch')
<h3>Modifier un client</h3>
<label for="society">Société</label>
    <input type="text" id="society" name="society" value="{{$client->society}}"/>
    @if ($errors->has('society'))
        <span class="error">{{$errors->first('society')}}</span>
    @endif
    <label for="phone">Téléphone</label>
    <input type="text" id="phone" name="phone" value="{{$client->phone}}"/>
    @if ($errors->has('phone'))
        <span class="error">{{$errors->first('phone')}}</span>
    @endif
    <label for="email">Adresse email</label>
    <input type="text" id="email" name="email" value="{{$client->email}}"/>
    @if ($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
    @endif
    <label for="tva">tva</label>
    <input type="text" id="tva" name="tva" value="{{$client->tva}}"/>
    @if ($errors->has('tva'))
        <span class="error">{{$errors->first('tva')}}</span>
    @endif

    <button type="submit" value="submit">Modifier le client</button>
</form>
<a href="/clients">Retour </a>
@endsection