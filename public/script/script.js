//Rango fecha index
$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
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

  //Rango fecha Form TA
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#data-inici-alta" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#data-final-alta" ).datepicker({
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

    //Rango fecha Form TB
    $( function() {
      var dateFormat = "mm/dd/yy",
        from = $( "#data-inici-baixa" )
          .datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 2
          })
          .on( "change", function() {
            to.datepicker( "option", "minDate", getDate( this ) );
          }),
        to = $( "#data-final-baixa" ).datepicker({
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

    //View User//
    
document.addEventListener("DOMContentLoaded", function() {
    // Obtén una referencia a los enlaces
    var enlaceDades = document.querySelector("#enlace-dades");
    var enlaceHistorial = document.querySelector("#enlace-historial");
    var enlaceReserves = document.querySelector("#enlace-reserves");
    
    // Obtén una referencia a los elementos de contenido
    var contenidoDades = document.querySelector("#contenido-dades");
    var contenidoHistorial = document.querySelector("#contenido-historial");
    var contenidoReserves = document.querySelector("#contenido-reserves");
    
    // Agrega controladores de eventos a los enlaces
    enlaceDades.addEventListener("click", function() {
        contenidoDades.style.display = "block";
        contenidoHistorial.style.display = "none";
        contenidoReserves.style.display = "none";
    });
    
    enlaceHistorial.addEventListener("click", function() {
        contenidoDades.style.display = "none";
        contenidoHistorial.style.display = "block";
        contenidoReserves.style.display = "none";
    });
    
    enlaceReserves.addEventListener("click", function() {
        contenidoDades.style.display = "none";
        contenidoHistorial.style.display = "none";
        contenidoReserves.style.display = "block";
    });
});

