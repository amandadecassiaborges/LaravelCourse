<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Amanda";
    $arr = [10, 20, 30, 40, 50];
    return view('welcome', ['nome' => $nome, 'arr' => $arr]);
});

Route::get('/contact', function () {
    return view('contact');
});
