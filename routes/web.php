<?php
// $url = 'http://127.0.0.1:8000/numero';
// $uri = '/numero';
//Tutte le rotte della applicaizone sono qui
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono-io', function () {
    return view('chi-sono');
});
Route::get('/contattami', function () {
    return view('contattami');
});


// Route::get('/ciccio', function () {
//     return 'ciao sono ciccio'; //string
// });

// Route::get('/numero', function () {
//     return 78; //intero
// });
