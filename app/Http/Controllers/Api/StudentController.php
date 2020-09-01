<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student; // aggiungo il model per fare funzionare la connessione al database

class StudentController extends Controller
{
    public function index() {

      $students = Student::all();

      return response()->json([
        'students' => $students
      ]);

    }
}
