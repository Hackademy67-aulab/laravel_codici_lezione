<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//La funzione anonima presente come secondo parametro della rotta é la funzione controller
//Le funzioni anonime hanno l'unico scopo di essere utilizzate come parametro di altre funzioni
//si dice di callback
Route::get('/', function () {
    //restituisce una vista presente all'interno del folder resources/views/....
    //la funzione view ha l'unico compito di andare nella cartella resources/views/ e cercare un file .blade.php
    //che corrisponde al nome identificato
    //return vuol dire restituire all'utente
    return view('welcome');
});

//Per la crezione di una rotta abbiamo bisogno di chiamare la funzione statica della classe Route corrisponde
//alla nostra intenzione, in questo caso restituire una risorsa quindi il metodo sará GET
//La funzione statica get vuole in input due parametri
//il primo é l'uri identificativo della risorsa da restituire all'utente
//il secondo é la funzione controller da attivare come logica
Route::get('/prima-pagina', function(){

    $name="Daniele";

    //iniettare un dato o una struttura dati all'interno della vista
    return view('primaPagina', ['pippo'=>$name]);
});


Route::get('/prodotti', function(){


    //In laravel per i percorsi lo "/" significa vai in public

    $products=[
        ['id'=>'1', 'name'=>'Iphone13','description'=>'Brutto','price'=>'1000','img'=>'/img/prima.jpg'],
        ['id'=>'2', 'name'=>'Samsung57','description'=>'Diciamo','price'=>'564','img'=>'/img/seconda.jpg'],
        ['id'=>'3', 'name'=>'Huawei36','description'=>'Caruccio','price'=>'345','img'=>'/img/terza.webp'],
        ['id'=>'4', 'name'=>'PocoMatroppo45','description'=>'Troppo poco','price'=>'286','img'=>'/img/quarta.webp'],
        ['id'=>'5', 'name'=>'Oppo','description'=>'Opplá','price'=>'465','img'=>'/img/quinta.webp'],
        ['id'=>'6', 'name'=>'Ciccio','description'=>'Pluto','price'=>'333','img'=>'/img/sesta.webp']
    ];

    return view('products', ['products'=>$products]);
});
