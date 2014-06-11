$(document).ready(function(){
	// prepare Options Object 
	var options = { 
    	//target:     '.contenido', 
    	url:      'views/pubanuncio/frmprocanun.php', 
    	dataType : 'json',
	    success: function(d){
          //noticia(d.mensaje, 'topCenter', d.tipo, false, true);
          alert('msn: '+d.mensaje);
        },  // post-submit callback 
     	error: function( jqXHR , textStatus , errorThrown ){
         //noticia(d.mensaje, 'center', 'success', 3000, true);
           console.log( ' BORKED ' , jqXHR , textStatus , errorThrown );
         }

	};

	// pass options to ajaxForm 
	$('.contenido').on('click', '#btn_anunciar', function(event) {
		event.preventDefault();
		$('#frmreganun').ajaxSubmit(options);
		/* Act on the event */
	});
	
});
