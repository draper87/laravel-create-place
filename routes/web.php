<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {

    $students = [
      [
        'nome' => 'Oliver',
        'cognome' => 'Benoit',
        'voto' => '10'
      ],
      [
        'nome' => 'Maria',
        'cognome' => 'Rossi',
        'voto' => '8'
      ],
      [
        'nome' => 'Francesco',
        'cognome' => 'Bianchi',
        'voto' => '6'
      ]
    ];

    return view('students', [
      'teacher' => 'Alessandro Scolozzi',
      'students' => $students,
    ]);
});
