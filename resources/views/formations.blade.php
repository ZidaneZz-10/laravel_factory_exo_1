@extends('template')
@section('content')
<div class="container mt-5">
    <div class="row border border-top-dark">
        <div class="col-1 ">ID</div>
        <div class="col-4 ">Nom</div>
        <div class="col-4 ">Description</div>
        <div class="col-3 ">Actions</div>
    </div>
</div>
@foreach($formations as $item)
<div class="container mt-5">
    <div class="row border border-top-dark">
        <div class="col-1 ">{{$item->id}}</div>
        <div class="col-4 ">{{$item->nom}}</div>
        <div class="col-4 ">{{$item->description}}</div>
        <div class="col-3 ">
            <button type="submit" class="bg-success"><a href="/edit-formation/{{$item->id}}">Edit</a></button>
            <form action="/formation-delete/{{$item->id}}" method="post">
                @csrf
                <button type="submit" class="bg-danger">Delete</button>
            </form>
            
        </div>
    </div>
</div>
@endforeach
@endsection