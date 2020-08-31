<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; // aggiungo il model per fare funzionare la connessione al database

class StudentController extends Controller
{
    public function index() {
      // $students = [
      //   [
      //     'nome' => 'Oliver',
      //     'cognome' => 'Benoit',
      //     'voto' => '10'
      //   ],
      //   [
      //     'nome' => 'Maria',
      //     'cognome' => 'Rossi',
      //     'voto' => '8'
      //   ],
      //   [
      //     'nome' => 'Francesco',
      //     'cognome' => 'Bianchi',
      //     'voto' => '6'
      //   ]
      // ];

      $students = Student::all();

      return view('students', [
        'teacher' => 'Alessandro Scolozzi',
        'students' => $students,
      ]);
    }
}
