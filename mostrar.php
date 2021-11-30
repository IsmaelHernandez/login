<?php
 
 require_once("config.php");
 
 $sql_nit = "SELECT co_usuarios.id_usuario, co_datos_empresa.id_usuario, co_datos_empresa.nit, co_ws_trazabilidad.id_ws_trazabilidad, co_ws_trazabilidad_detalle.id_ws_trazabilidad FROM co_usuarios 
    INNER JOIN co_datos_empresa ON co_usuarios.id_usuario = co_datos_empresa.id_usuario
    INNER JOIN co_ws_trazabilidad ON co_datos_empresa.id_usuario = co_ws_trazabilidad.id_ws_trazabilidad
    INNER JOIN co_ws_trazabilidad_detalle ON co_ws_trazabilidad.id_ws_trazabilidad = co_ws_trazabilidad_detalle.id_ws_trazabilidad WHERE co_datos_empresa.nit='nit'";

  $resultado = mysqli_query($mysqli, $sql_nit); 
  $filas = mysqli_num_rows($resultado);
   var_dump($resultado);

  if($filas == 'nit'){
      while($fila=mysqli_fetch_assoc($resultado)){
         echo $fila["nit"];
         echo $fila["code_response"];
         echo $fila["folio"];
      }
  }
  else{
      echo "No se encontro usuario";
   }

 mysqli_free_result($resultado);
 mysqli_close($mysqli); 

?>