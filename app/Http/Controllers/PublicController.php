<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Tutti i controller hanno un solo compito
//gestire tutta la logica, collegata alla tipologia di
//gestione dei dati
//Il controller si chiama Public controller perché
//gestirá tutta la logica pubblica, cioé tutte le logiche codivise
//nell'intero progetto
class PublicController extends Controller
{
    public function home() {
        //restituisce una vista presente all'interno del folder resources/views/....
        //la funzione view ha l'unico compito di andare nella cartella resources/views/ e cercare un file .blade.php
        //che corrisponde al nome identificato
        //return vuol dire restituire all'utente
        return view('welcome');
    }

    public function firstPage(){

        $name="Daniele";
    
        //iniettare un dato o una struttura dati all'interno della vista
        return view('primaPagina', ['pippo'=>$name]);
    }
}
