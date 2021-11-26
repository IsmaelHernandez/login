<?php
 
 $usuario = $_POST["usuario"];
 $password = $_POST["password_hash"];
 $hashedPassword = hash('sha256', $password);

//  var_dump($_POST);

 require_once("config.php");
 
 $sql = "SELECT * FROM co_usuarios WHERE usuario='".mysqli_real_escape_string($mysqli,$usuario)."' AND password_hash='".mysqli_real_escape_string($mysqli,$hashedPassword)."'";
 $resultado = mysqli_query($mysqli,$sql);
 $filas = mysqli_num_rows($resultado); //numero de filas

 if($filas >0){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $usuario_valido=$fila["usuario"];
        $clave_valida=$fila["password_hash"];
        $id=$fila["id_usuario"];
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["id_usuario"] = $id;  
        header("Location: index2.php");
    }

 }
else{
    echo "El usuario o la contraseña son incorrectos";
}

 mysqli_free_result($resultado);
 mysqli_close($mysqli);
?>