<h1>Pagina Studenti</h1>

<h2>Insegnante: {{ $teacher }}</h2>

<h2>Studenti:</h2>
@foreach ($students as $student)
  <ul>
    <li>Nome {{ $student['nome'] }}</li>
    <li>Cognome {{ $student['cognome']}}</li>
    <li>Voto {{ $student['voto']}}</li>
  </ul>
@endforeach
