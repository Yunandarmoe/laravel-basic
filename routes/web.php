<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'chessy crust'],
        ['type' => 'pepproni', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crust'],
    ];
    
    return view('pizzas', ['pizzas' => $pizzas]);
});
