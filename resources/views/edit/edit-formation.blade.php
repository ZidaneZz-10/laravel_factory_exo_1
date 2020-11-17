@extends('template')
@section('content')
<div class="container">
    <form action="/formation-update/{{$formation->id}}" method="post">
        @csrf
        <p>nom <br><input  type="string" name="nom" value="{{$formation->nom}}"></p>
        <p>description<input type="text" name="description" class="form-control" rows="3" value="{{$formation->description}}"></p>
        <button type="submit">Update</button>
    </form>
</div>
@endsection