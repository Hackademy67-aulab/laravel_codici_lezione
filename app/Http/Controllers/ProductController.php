<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){


        //In laravel per i percorsi lo "/" significa vai in public
    
        $products=[
            ['id'=>'1', 'name'=>'Iphone13','description'=>'Brutto','price'=>'1000','img'=>'/img/prima.jpg'],
            ['id'=>'2', 'name'=>'Samsung57','description'=>'Diciamo','price'=>'564','img'=>'/img/seconda.jpg'],
            ['id'=>'3', 'name'=>'Huawei36','description'=>'Caruccio','price'=>'345','img'=>'/img/terza.jpg'],
            ['id'=>'4', 'name'=>'PocoMatroppo45','description'=>'Troppo poco','price'=>'286','img'=>'/img/quarta.jpg'],
            ['id'=>'5', 'name'=>'Oppo','description'=>'Opplá','price'=>'465','img'=>'/img/quinta.jpg'],
            ['id'=>'6', 'name'=>'Ciccio','description'=>'Pluto','price'=>'333','img'=>'/img/sesta.jpg']
        ];
    
        return view('products', ['products'=>$products]);
    }


    public function show($id){

        $products=[
            ['id'=>'1', 'name'=>'Iphone13','description'=>'Brutto','price'=>'1000','img'=>'/img/prima.jpg'],
            ['id'=>'2', 'name'=>'Samsung57','description'=>'Diciamo','price'=>'564','img'=>'/img/seconda.jpg'],
            ['id'=>'3', 'name'=>'Huawei36','description'=>'Caruccio','price'=>'345','img'=>'/img/terza.jpg'],
            ['id'=>'4', 'name'=>'PocoMatroppo45','description'=>'Troppo poco','price'=>'286','img'=>'/img/quarta.jpg'],
            ['id'=>'5', 'name'=>'Oppo','description'=>'Opplá','price'=>'465','img'=>'/img/quinta.jpg'],
            ['id'=>'6', 'name'=>'Ciccio','description'=>'Pluto','price'=>'333','img'=>'/img/sesta.jpg']
        ];
    
        //Funzione di ricerca del dato specifico all'interno della nostra base di dati
        foreach ($products as $product) {
            if($product['id']==$id){
                return view('productDetail', ['product'=>$product]);
            }
        }
    
    }
}
