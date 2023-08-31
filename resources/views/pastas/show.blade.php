@extends('layouts.base')


@section('contents')
        <h1>{{ $pasta->titolo }}</h1>
        <h2>Tipo: {{ $pasta->tipo }}, Tempo di cottura: {{ $pasta->cottura }} minuti, TPeso:{{ $pasta->peso }} g</h2>

        <img src="{{ $pasta->src }}" alt="">

        <p>{{ $pasta->descrizione }}</p>
@endsection
