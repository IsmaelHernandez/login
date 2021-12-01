
function Buscar() {

 var nit = $('#nit').val();
 var prefijo =$('#prefix').val();
 var folio = $('#folio').val();
 
 $.ajax({
    url: 'mostrar.php',
    type: 'POST', 
    data: {'nit':nit,'prefijo':prefijo,'folio':folio },
 }).done(function(mostrar) { 
    
     $('#tabla_user_traza').html(mostrar); 
                
    })
    
};