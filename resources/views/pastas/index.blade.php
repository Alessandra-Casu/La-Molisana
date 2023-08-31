@extends('layouts.base')

@section('contents')
<h1>Paste</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cottura (min)</th>
        <th scope="col">Peso (g)</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pastas as $pasta)
            <tr>
                <th scope="row">{{ $pasta->id}}</th>
                <td>{{ $pasta->titolo}}</td>
                <td>{{ $pasta->tipo}}</td>
                <td>{{ $pasta->cottura}}</td>
                <td>{{ $pasta->peso}}</td>
                <td>
                    
                    <a class="btn btn-primary" href="{{ route('pastas.show', ['pasta' => $pasta->id]) }}">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection

