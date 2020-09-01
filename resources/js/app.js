require('./bootstrap');

var $ = require('jquery');

const Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax({
    url: 'http://127.0.0.1:8000/api/students',
    method: 'GET',
    success: function(dataResponse) {
      var studenti = dataResponse.students;

      var source = document.getElementById("student-template").innerHTML;
      var template = Handlebars.compile(source);


      for (var i = 0; i < studenti.length; i++) {
        var studente = studenti[i];
        var html = template(studente);
        $('.studente').append(html);
      }
    },
    error: function error() {
      alert('error');
    }
  });
});
