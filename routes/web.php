<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route:: get('/product/{id}', function(string $id){
    return "Product Id = $id";
});


Route:: get('/user',function(string $user){
    return view('',['user'=>$user]);
});
