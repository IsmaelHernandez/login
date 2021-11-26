<?php

 require_once("config.php");
 
 $sql = "SELECT co_datos_empresa.id_usuario, co_usuarios.id_usuario, co_ws_trazabilidad.id_usuario_ws FROM co_ws_trazabilidad_detalle 
         INNER JOIN co_usuarios ON co_usuarios.id_usuario = co_datos_empresa.id_usuario
         INNER JOIN co_datos_empresa ON co_datos_empresa.id_usuario = co_usuarios.id_usuario
         INNER JOIN co_ws_trazabilidad ON co_ws_trazabilidad.id_usuario_ws = co_usuarios.tipo_usuario WHERE   ";


 $resultado = mysqli_query($mysql, $sql);

 //WHILE DEVUELVCA CADA FILA QUE TRAE LA CONSULTA
?>