<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    use HasFactory;
    // se non lo mettete da errore quando tentate il mass assigment
    //se lo mettete e cercate di assegnare un valore a un campo non in lista
    //non da errore ma ignora il campo
    // protected $fillable = ['titolo', 'src', 'tipo', 'descrizione', 'cottura', 'peso'];
}
