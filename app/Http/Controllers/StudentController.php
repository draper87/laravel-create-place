<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; // aggiungo il model per fare funzionare la connessione al database

class StudentController extends Controller
{
    public function index() {

      $students = Student::all();

      return view('students', [
        'teacher' => 'Alessandro Scolozzi',
        'students' => $students,
      ]);
    }

    public function handlebars() {
      return view('students-handlebars');
    }
}
