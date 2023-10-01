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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('produtos');
});

Route::get('/produtos', function () {

    $arr = [
        'nome' => 'Levi',
        'idade' => 23,
        'cidade' => 'Novo Oriente',
        'profissao' => 'Desenvolvedor',
    ];

    $arr_numerico = [1, 2, 3, 4, 5, 6, 7, 8, 9];


    return view('produtos', ['arr' => $arr], ['arr_numerico' => $arr_numerico]);
});