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
@foreach($datas as $data)
<div class="container mt-5">
    <div class="row border border-top-dark">
        <div class="col-1 ">{{$data->id}}</div>
        <div class="col-4 ">{{$data->nom}}</div>
        <div class="col-4 ">{{$data->description}}</div>
        <div class="col-3 ">
                <button type="submit" class="bg-success"><a href="/edit-batiment/{{$data->id}}">Edit</a></button>
            <form action="/batiment-delete/{{$data->id}}" method="post">
                @csrf
                <button type="submit" class="bg-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection