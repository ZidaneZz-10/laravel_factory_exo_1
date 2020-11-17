@extends('template')
@section('content')
<div class="container mt-5">
    <div class="row border border-top-dark">
        <div class="col-2 ">ID</div>
        <div class="col-2 ">Nom</div>
        <div class="col-2 ">Prenom</div>
        <div class="col-2 ">Age</div>
        <div class="col-2 ">Etat</div>
        <div class="col-2 ">Action</div>

    </div>
</div>
@foreach($eleves as $item)
<div class="container mt-5">
    <div class="row border border-top-dark">
        <div class="col-2 ">{{$item->id}}</div>
        <div class="col-2 ">{{$item->nom}}</div>
        <div class="col-2 ">{{$item->prenom}}</div>
        <div class="col-2 ">{{$item->age}}</div>
        <div class="col-2 ">{{$item->etat}}</div>
        <div class="col-2 ">
            <button type="submit" class="bg-success"><a href="/edit-eleve/{{$item->id}}">Edit</a></button>
            <form action="/eleve-delete/{{$item->id}}" method="post">
                @csrf
                <button type="submit" class="bg-danger">Delete</button>
            </form>
            
        </div>
    </div>
</div>
@endforeach
@endsection