<h2>Lista Studenti</h2>

<div class="studente"></div>

<script id="student-template" type="text/x-handlebars-template">
  <ul>
      <li>Nome @{{ nome }}</li>
      <li>Cognome @{{ cognome }}</li>
      <li>Voto @{{ voto }}</li>
  </ul>
</script>

<script src="{{ asset('js/app.js') }}"></script>
