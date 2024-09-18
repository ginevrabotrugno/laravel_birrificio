{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">

    <h1>Edit | {{$beer->name}}</h1>

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('beers.update', $beer)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $beer->name)}}">
            @error('name')
                <small class="text-danger"> {{$message}} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $beer->price)}}">
            @error('price')
                <small class="text-danger"> {{$message}} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="average" class="form-label">Voto</label>
            <input type="text" class="form-control @error('average') is-invalid @enderror" id="average" name="average" value="{{old('average', $beer->average)}}">
            @error('average')
                <small class="text-danger"> {{$message}} </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('imagine', $beer->imagine)}}">
            @error('image')
                <small class="text-danger"> {{$message}} </small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </form>


</div>

@endsection

@section('title')
    EDIT
@endsection
