{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

    <div class="container my-5 text-center">

       @if (session('edited'))

       <div class="alert alert-success" role="alert">
            {{ session('edited') }}
       </div>

       @endif

        <h1> {{ $beer->name }} </h1>
        <p>Prezzo: {{$beer->price}} | Voto: {{$beer->average}} | Slug: {{$beer->slug}} </p>
        <img src="{{$beer->image}}" alt="{{ $beer->name }}">

    </div>
@endsection

@section('title')
    {{ $beer->name }}
@endsection
