{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container my-5">

        <h1 class="my-5">BEERS</h1>

        <form action="{{ route('beers.index') }}" method="GET" class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Nome" name="tosearch">
            <button type="submit" class="btn btn-primary">Cerca</button>
        </form>

        @if (session('cancelled'))
            <p class="text-success">L'elemento è stato eliminato correttamente</p>
        @endif

        @if ($beers->count() > 0)
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beers as $beer)
                        <tr>
                            <th> {{ $beer->id }} </th>
                            <td> {{ $beer->name }} </td>
                            <td> {{ $beer->price }} </td>
                            <td>
                                <a href="{{ route('beers.show', $beer) }}" class="btn btn-info">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('beers.edit', $beer) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>

                                @include('partials.form_delete')
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <h2>La ricerca non ha prodotto risultati</h2>
        @endif
        {{ $beers->links() }}
    </div>
@endsection

@section('title')
    BEERS
@endsection
