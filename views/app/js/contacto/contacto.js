/**
 * Ajax action to api rest
*/
function contacto(){

  // Animación
  var l = Ladda.create( document.querySelector( '#contacto' ) );
  l.start();
  
  $.ajax({
    type : "POST",
    url : "api/contacto",
    data : $('#contacto_form').serialize(),
    success : function(json) {
      if(json.success == 1) {
        $.dialog({
          title: 'Éxito',
          type: 'green',
          typeAnimated: true,      
          content: json.message,
        });

        setTimeout(function(){
            location.reload();
        },1000);

      } else {

        $.dialog({
          title: 'Error',
          type: 'red',
          typeAnimated: true,      
          content: json.message,
        });

      }

      l.stop();
    },
    error : function(xhr, status) {

      $.dialog({
          title: 'Error Interno',
          type: 'red',
          typeAnimated: true,      
          content: 'Ha ocurrido un problema interno.',
      });

      l.stop();
    }
  });
}

/**
 * Events
 *  
 * @param {*} e 
 */
$('#contacto').click(function(e) {
  e.defaultPrevented;
  contacto();
});