@extends('../layout/app')
@section('title', 'Restaurant Creation')
@section('content')
    <form action="/restaurant/create" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name"/>
        <label for="description">description</label>
        <input type="text" id="description" name="description"/>
        <label for="adress">adress</label>
        <input type="text" id="adress" name="adress"/>
        <label for="zipCode">zipCode</label>
        <input type="number" id="zipCode" name="zipCode"/>
        <label for="town">town</label>
        <input type="text" id="town" name="town"/>
        <label for="review">review</label>
        <input type="number" id="review" name="review"/>
        <input type="submit" value="Submit"></input>
    </form>
@endsection
