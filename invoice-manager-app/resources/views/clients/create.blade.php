@extends('../layout/app')
@section('title', 'créer un client')

@section('content')

<form class="form--basic" method="POST" action="/clients/create">
    @csrf
<h3>Créer un client</h3>
<label for="society">Société</label>
    <input type="text" id="society" name="society"/>
    @if ($errors->has('society'))
        <span class="error">{{$errors->first('society')}}</span>
    @endif
    <label for="phone">Téléphone</label>
    <input type="text" id="phone" name="phone"/>
    @if ($errors->has('phone'))
        <span class="error">{{$errors->first('phone')}}</span>
    @endif
    <label for="email">Adresse email</label>
    <input type="text" id="email" name="email"/>
    @if ($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
    @endif
    <label for="tva">tva</label>
    <input type="text" id="tva" name="tva"/>
    @if ($errors->has('tva'))
        <span class="error">{{$errors->first('tva')}}</span>
    @endif

    <button type="submit" value="submit">Créer le client</button>
</form>
@endsection