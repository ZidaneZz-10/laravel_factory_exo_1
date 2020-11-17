@extends('template')
@section('content')
<div class="container">
    <form action="/batiment-update/{{$batiment->id}}" method="post">
        @csrf
        <p>nom <br><input  type="string" name="nom" value="{{$batiment->nom}}"></p>
        <p>description<br><input  type="text" name="description" class="form-control" rows="3" value="{{$batiment->description}}"></p>
        <button type="submit">Update</button>
    </form>
</div>
@endsection