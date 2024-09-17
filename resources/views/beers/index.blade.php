{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container my-5">

    <table class="table">
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
                    <td> <a href="{{route('beers.show', $beer)}}" class="btn btn-warning">INFO</a> </td>
                </tr>

            @endforeach
        </tbody>
      </table>
</div>


@endsection
