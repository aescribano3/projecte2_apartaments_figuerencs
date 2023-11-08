$(document).ready(function () {
$('#contenido-dades').show();

$('#enlace-dades').on('click', function () {
  $('#contenido-dades').show();
  $('#contenido-historial').hide();
  $('#contenido-reserves').hide();
  $('#contenido-usuarios').hide();
});
$('#enlace-historial').on('click', function () {
  $('#contenido-dades').hide();
  $('#contenido-historial').show();
  $('#contenido-reserves').hide();
  $('#contenido-usuarios').hide();

  $("#historialReserves").DataTable();
});
$('#enlace-reserves').on('click', function () {
  $('#contenido-dades').hide();
  $('#contenido-historial').hide();
  $('#contenido-reserves').show();
  $('#contenido-usuarios').hide();

  $("#reserves").DataTable();
});
$('#enlace-usuarios').on('click', function () {
  $('#contenido-dades').hide();
  $('#contenido-historial').hide();
  $('#contenido-reserves').hide();
  $('#contenido-usuarios').show();

  $("#usuaris").DataTable();
});

var mymap = L.map('map').setView([42.273611990936516, 2.9647091451457754], 16);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution:
'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(mymap);
let marker = L.marker([42.273611990936516, 2.9647091451457754]).addTo(mymap);

$(".Apt-Model-Show").on("click", function (event) {
  var AptId = $(this).attr('id');
  $.ajax({
      url: '/index.php?r=aptdata',
      type: 'GET',
      data: { AptId: AptId },
      success: function (response) {
        $('#exampleModal').html(response);
        $('#exampleModal').modal('show');
        var modmap = L.map('map-mod').setView([95.3851, 45.1734], 17);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: 
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(modmap);
        let marker = L.marker([95.3851, 45.1734]).addTo(modmap);
      },
      error: function (error) {
          console.log(error);
      }
  });
});

});

//Rango fecha General
$(function() {
  var dateFormat = "dd/mm/yy"; // Cambia el formato de fecha a "dd/mm/yy" para que coincida con tus campos

  var from = $(".from").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 2,
    dateFormat: dateFormat, // Establece el formato de fecha
  }).on("change", function() {
    to.datepicker("option", "minDate", getDate(this));
  });

  var to = $(".to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 2,
    dateFormat: dateFormat, // Establece el formato de fecha
  }).on("change", function() {
    from.datepicker("option", "maxDate", getDate(this));
  });

  function getDate(element) {
    var date;
    try {
      date = $.datepicker.parseDate(dateFormat, element.value);
    } catch (error) {
      date = null;
    }

    return date;
  }
});
