function Buscar() {

 var nit = $('#nit').val();
 var folio = $('#folio').val();
 var prefijo =$('#prefix').val();

 $.ajax({
    url: 'mostrar.php',
    type: 'POST', 
    data: {'prefijo':prefijo,'folio':folio, 'nit':nit },
 }).done(function(mostrar) { 
    
    $('#tabla_user_traza').html(mostrar);
                
    })
    
};