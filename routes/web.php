<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WorkerController;
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

//Il web.php si occupa SOLTANTO di gestire le rotte

//La funzione anonima presente come secondo parametro della rotta é la funzione controller
//Le funzioni anonime hanno l'unico scopo di essere utilizzate come parametro di altre funzioni
//si dice di callback

//Quando in un file inseriamo una nuova classe, primo step assoluto é importare la classe all'interno del file
Route::get('/', [PublicController::class, 'home'])->name('homePage');

//Per la crezione di una rotta abbiamo bisogno di chiamare la funzione statica della classe Route corrisponde
//alla nostra intenzione, in questo caso restituire una risorsa quindi il metodo sará GET
//La funzione statica get vuole in input due parametri
//il primo é l'uri identificativo della risorsa da restituire all'utente
//il secondo é la funzione controller da attivare come logica
Route::get('/first-page', [PublicController::class, 'firstPage'])->name('firstPage');


Route::get('/products-page', [ProductController::class, 'index'])->name('productsPage');


Route::get('/product-detail/{id}',[ProductController::class, 'show'])->name('productDetail');


Route::get('/workers-page', [WorkerController::class, 'index'])->name('workersPage');


Route::get('/worker-detail/{id}', [WorkerController::class, 'show'])->name('workerDetail');
