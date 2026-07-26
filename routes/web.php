<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "João Vitor";
    $idade = 23;

    $arr = [10,20,30,40,50];

    $nomes = ['Matheus', 'Maria', 'Saulo', 'Miguel'];
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade'=> $idade,
            'arr'=> $arr,
            'nomes'=> $nomes
        ]
    );
});


Route::get('/contact', function (){
    return view('contact');
});


Route::get('/produtos', function (){
    return view('products');
});