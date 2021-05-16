<?php


use Illuminate\Support\Facades\Route;


Route::get('/produtos/{idProduct?}', function($idProduct = ''){
    return "Produto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag){
    return "Produtos da categoria: {$flag} posts";
});

Route::get('/categorias/{flag}', function ($flag){
    return "Produtos da categoria: {$flag}";
});

Route::post('/register', function(){
    return '';
});

Route::get('/empresa' ,function(){
    return "Sobre a empresa";
});


Route::get('/contato' ,function(){
    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});
