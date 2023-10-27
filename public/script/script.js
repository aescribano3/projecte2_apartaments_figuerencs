//Rango fecha index
$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( ".from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
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

  $(document).ready(function () {

    $('#contenido-dades').show();

    $('#enlace-dades').on('click', function () {
      $('#contenido-dades').show();
      $('#contenido-historial').hide();
      $('#contenido-reserves').hide();
    });
    $('#enlace-historial').on('click', function () {
      $('#contenido-dades').hide();
      $('#contenido-historial').show();
      $('#contenido-reserves').hide();
    });
    $('#enlace-reserves').on('click', function () {
      $('#contenido-dades').hide();
      $('#contenido-historial').hide();
      $('#contenido-reserves').show();
    });


  });