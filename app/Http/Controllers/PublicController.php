<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contactUs(){
        return view('contactPage');
    }

    //Funzione collegata ad una rotta di tipo post
    //Non restituendo alcuna vista ha una return di tipo particola cioé redirect
    //a una rotta che deve essere di tipo GET
    //Dependency injection
    public function contactSubmit(Request $request){
        //Die e Dump strumento necessario per debuggare
        //Il metodo all() indica che del $request prendimi solo i dati che ho inserito
        //dd($request->all());

        $name = $request->input('name');
        $email = $request->input('email');
        $text = $request->input('text');
        
        //dd($name , $email, $text);

        $dataToSend = compact('name','email','text');

        //Object composition
        Mail::to($email)->send(new ContactMail($dataToSend));

        return redirect(route('homePage'))->with('message','Complimenti hai inviato correttamente la mail!');
    }
}
