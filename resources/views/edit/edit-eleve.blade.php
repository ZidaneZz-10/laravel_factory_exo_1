@extends('template')
@section('content')
<div class="container">
    <form action="/eleve-update/{{$eleve->id}}" method="post">
        @csrf
        <p>nom <br><input  type="string" name="nom" value="{{$eleve->nom}}"></p>
        <p>prenom <br><input  type="string" name="prenom" value="{{$eleve->prenom}}"></p>
        <p>age<br><input  type="number" name="age" value="{{$eleve->age}}"></p>
        <p>etat<br><input  type="boolean" name="etat" value="{{$eleve->etat}}"></p>
        <button type="submit">Update</button>
    </form>
</div>
@endsection