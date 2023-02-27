@extends('../layout/app')
@section('title', 'Restaurant Creation')
@section('content')
    <form action="/restaurant/create" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name"/>
        @if($errors->has('name'))
            <b>{{$errors->first('name')}}</b>
        @endif
        <label for="description">description</label>
        <input type="text" id="description" name="description"/>
        @if($errors->has('description'))
            <b>{{$errors->first('description')}}</b>
        @endif
        <label for="adress">adress</label>
        <input type="text" id="adress" name="adress"/>
        @if($errors->has('adress'))
            <b>{{$errors->first('adress')}}</b>
        @endif
        <label for="zipCode">zipCode</label>
        <input type="number" id="zipCode" name="zipCode"/>
        @if($errors->has('zipCode'))
            <b>{{$errors->first('zipCode')}}</b>
        @endif
        <label for="town">town</label>
        <input type="text" id="town" name="town"/>
        @if($errors->has('town'))
            <b>{{$errors->first('town')}}</b>
        @endif
        <label for="review">review</label>
        <input type="number" id="review" name="review"/>
        @if($errors->has('review'))
            <b>{{$errors->first('review')}}</b>
        @endif
        <input type="submit" value="Submit"></input>
    </form>
@endsection
