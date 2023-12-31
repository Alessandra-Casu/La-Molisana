<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pastas = Pasta::all(); //SELECT * FROM 'pastas'
        $pastas = Pasta::paginate(5); 

        return view('pastas.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ritorna la lista che continee il form

        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validare i dati
        $request->validate([
            'src'               => 'string|max:200',
            'titolo'            => 'required|string|min:5|max:100|',
            'tipo'              => 'required|string|max:20',
            'cottura'           => 'required|integer|min:1|max:255',
            'peso'              => 'required|integer|min:20|max:2000',
            'descrizione'       => 'string',
            ]
        );

        $data = $request->all();

        //salvare i dati nel database
        $newPasta = new Pasta();
        $newPasta->src          = $data['src'];
        $newPasta->titolo       = $data['titolo'];
        $newPasta->tipo         = $data['tipo'];
        $newPasta->cottura      = $data['cottura'];
        $newPasta->peso         = $data['peso'];
        $newPasta->descrizione  = $data['descrizione'];
        $newPasta->save();

        
        // $newPasta = Pasta::create($data);

        return redirect()->route('pastas.show', ['pasta' => $newPasta->id]); 'Salvataggio eseguito con successo';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function show(Pasta $pasta)
    {
        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasta $pasta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasta $pasta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasta $pasta)
    {
        //
    }
}
