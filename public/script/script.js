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
  });
  $('#enlace-reserves').on('click', function () {
    $('#contenido-dades').hide();
    $('#contenido-historial').hide();
    $('#contenido-reserves').show();
    $('#contenido-usuarios').hide();
  });
  $('#enlace-usuarios').on('click', function () {
    $('#contenido-dades').hide();
    $('#contenido-historial').hide();
    $('#contenido-reserves').hide();
    $('#contenido-usuarios').show();
  });

  var mymap = L.map('map').setView([41.3851, 2.1734], 17);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: 
  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(mymap);
  let marker = L.marker([41.3851, 2.1734]).addTo(mymap);

  $('.Apt-Model-Show').on('click', function (event) {
    var AptId = $(this).attr('id');
    $.ajax({
      url: '/index.php?r=aptdata',
      type: 'GET',
      data: {AptId: AptId },
      success: function (data) {
        $('#exampleModal').html(data);
        $('#exampleModal').modal('show');
      },
      error: function (error) {
        console.log(error);
      }
    });
});

});

//Rango fecha index
$( function() {
    var dateFormat = "mm/dd/yy",
      from = $(".from")
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on("change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( ".to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );