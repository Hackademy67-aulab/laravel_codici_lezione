<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {

        $workers=[
            ['id'=>'1','name'=>'Alek','surname'=>'Leo','age'=>'34','img'=>'/img/Alessandro_leo.png',],
            ['id'=>'2','name'=>'Paola','surname'=>'Pichierri','age'=>'21','img'=>'/img/paola-pichierri.png',],
            ['id'=>'3','name'=>'Angela','surname'=>'Aruanno','age'=>'17','img'=>'/img/Angela-Aruanno.png',],
            ['id'=>'4','name'=>'Roberto','surname'=>'Sasso','age'=>'26','img'=>'/img/roberto-sasso.png',],
            ['id'=>'5','name'=>'Andrea','surname'=>'Mininni','age'=>'28','img'=>'/img/andrea-mininni.png',]
        ];
    
        //La funzione compact ha come risultato un array chiave valore identico a quello che abbiamo
        //usato fino ad ora compact('workers') corrisponde a ['workers'=>$workers]
        return view('workersPage', compact('workers'));
    
    }

    public function show($id){
    
        $workers=[
            ['id'=>'1','name'=>'Alek','surname'=>'Leo','age'=>'34','img'=>'/img/Alessandro_leo.png',],
            ['id'=>'2','name'=>'Paola','surname'=>'Pichierri','age'=>'21','img'=>'/img/paola-pichierri.png',],
            ['id'=>'3','name'=>'Angela','surname'=>'Aruanno','age'=>'17','img'=>'/img/Angela-Aruanno.png',],
            ['id'=>'4','name'=>'Roberto','surname'=>'Sasso','age'=>'26','img'=>'/img/roberto-sasso.png',],
            ['id'=>'5','name'=>'Andrea','surname'=>'Mininni','age'=>'28','img'=>'/img/andrea-mininni.png',]
        ];
    
        foreach ($workers as $worker) {
            //se dell'array ció che vedi in chiave id é UGUALE all'id che ti sto passando (parametro reale del parametro formale $id)
            if($worker['id'] == $id){
                return view('workerDetail', compact('worker'));
            }
        }
    
    
    }
}
