@extends('layouts.base')

@section('contents')
    <h1>Inserisci una nuova pasta</h1>
    <form method="POST" action="{{ route('pastas.store')}}">
        
        
            <div class="mb-3">
              <label for="titolo" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="titolo" >
            </div>

            <div class="mb-3">
                <label for="src" class="form-label">src</label>
                <input type="text" class="form-control" id="src" >
            </div>
            
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" >
            </div>

            <div class="mb-3">
                <label for="cottura" class="form-label">Cottura</label>
                <input type="text" class="form-control" id="cottura" >
            </div>

            <div class="mb-3">
                <label for="peso" class="form-label">Peso</label>
                <input type="text" class="form-control" id="peso" >
            </div>

            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea  class="form-control" id="descrizione" rows="3"> </textarea>
              </div>
        
        
            <button class="btn btn-primary">Salva</button>
          

    </form>
@endsection