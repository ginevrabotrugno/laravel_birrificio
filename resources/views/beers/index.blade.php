{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">

    <h1 class="my-5">BEERS</h1>

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
                        <a href="{{route('beers.show', $beer)}}" class="btn btn-info">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>

            @endforeach
        </tbody>
      </table>
</div>


@endsection
