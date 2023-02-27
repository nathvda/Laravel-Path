@extends('../layout/app')
@section('title', 'Restaurant Edition')
@section('content')
    <form action="/restaurant/edit/{{ $restaurant->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$restaurant->name}}"/>
        @if($errors->has('name'))

        <b>{{$errors->first('name')}}</b>

        @endif
        <label for="description">description</label>
        <input type="text" id="description" name="description" value="{{$restaurant->description}}"/>
         @if($errors->has('description'))

        <b>{{$errors->first('description')}}</b>

        @endif
        <label for="adress">adress</label>
        <input type="text" id="adress" name="adress" value="{{$restaurant->adress}}"/>
         @if($errors->has('adress'))

        <b>{{$errors->first('adress')}}</b>

        @endif
        <label for="zipCode">zipCode</label>
        <input type="number" id="zipCode" name="zipCode" value="{{$restaurant->zipCode}}"/>
         @if($errors->has('zipCode'))

        <b>{{$errors->first('zipCode')}}</b>

        @endif
        <label for="town">town</label>
        <input type="text" id="town" name="town" value="{{$restaurant->town}}"/>
         @if($errors->has('town'))

        <b>{{$errors->first('town')}}</b>

        @endif
        <label for="review">review</label>
        <input type="number" id="review" name="review" value="{{$restaurant->review}}"/>
         @if($errors->has('review'))

        <b>{{$errors->first('review')}}</b>

        @endif
        <input type="submit" value="Submit"></input>
    </form>
@endsection
