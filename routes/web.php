<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
https://bitbucket.org/booleancareers/laravel-primi-passi

Installazione e clonazione laravel. Route, controller e layout.
Partendo dalla repo base modificare e aggiungere le seguenti parti:
Modificare la rotta base dirottandola ad un controller
Creare un controller che ritorni la view movies (precedentemente ritornata direttamente dalla rotta), con una variabile che contiene cd musicali.
Modificare i cd musicali statici, sostituendoli con un ciclo che legga la variabile che arriva dal controller
Creare un layout con html base
Creare un component header incluso nel layout base
Creare il file scss e importare il css con i metodi di Laravel
*/

// Route::get('/', function () {
//     return view('cds');
// });

Route::get('/', 'TestController@index');