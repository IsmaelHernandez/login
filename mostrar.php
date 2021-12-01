<?php
 
 require_once("config.php");

 $nit = isset($_POST['nit'])?($_POST['nit']):'';
 $prefijo = isset($_POST['prefix'])?($_POST['prefix']):'';
 $folio = isset($_POST['folio'])?($_POST['folio']):'';
 
 $sql_nit = "SELECT co_usuarios.id_usuario, co_datos_empresa.id_usuario, co_datos_empresa.nit, co_ws_trazabilidad.id_usuario_ws, co_ws_trazabilidad.prefix, co_ws_trazabilidad.folio, co_ws_trazabilidad_detalle.id_ws_trazabilidad FROM co_usuarios 
    INNER JOIN co_datos_empresa ON co_usuarios.id_usuario = co_datos_empresa.id_usuario
    INNER JOIN co_ws_trazabilidad ON co_datos_empresa.id_usuario = co_ws_trazabilidad.id_usuario_ws
    INNER JOIN co_ws_trazabilidad_detalle ON co_ws_trazabilidad.id_ws_trazabilidad = co_ws_trazabilidad_detalle.id_ws_trazabilidad WHERE co_datos_empresa.nit='$nit' AND co_ws_trazabilidad.prefix='$prefijo' AND co_ws_trazabilidad.folio='$folio' ";
 
   echo $sql_nit;      
   $resultado = mysqli_query($mysqli, $sql_nit);
   $total_filas = mysqli_num_rows($resultado);
   
  if($total_filas > 0){
     echo '<table class="table table-hover table-striped table-bordered table-condensed"><thead class="thead-dark"><th>NIT</th><th class="text-center">Prefijo</th><th>Folio</th></thead>';
     while($fila=mysqli_fetch_assoc($resultado)){
         echo '<tbody style="text-align: center;">';
         echo '<tr>';
         echo '<td>'.$fila['nit'].'</td>';
         echo '<td>'.$fila['prefix'].'</td>';
         echo '<td>'.$fila['folio'].'</td>';
         echo '</tr>';
         echo '</tbody>';
      }
      echo '</table>';
  }
  else{
      echo ' No se encontro usuario ';
   }

 mysqli_free_result($resultado);
 mysqli_close($mysqli); 

?>