<?php
    session_start();
    //si no hay algo en la llamada
    if (empty($_SESSION["usuario"])) {
         //Lo redireccionamos al formulario de inicio de sesión
        header("Location: index.php");
        # Y salimos del script
        exit();
    }
    
    ?>
    <!DOCTYPE html>
<html>
    
<head>
	<title>Form2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
      <div class="d-flex justify-content-center form_container">
         <form action="mostrar.php" method="POST">
            <b>Nit:</b>
            <div class = "form-group">
               <input type="text" name="nit" class="form-control"  placeholder="Nit">
            </div>
            <b>Prefijo:</b>
            <div class = "form-group">
               <input type="text" name="prefix" class="form-control"  placeholder="Prefijo">
            </div>
            <b>Folio:</b>
            <div class = "form-group">
               <input type="text" name="folio" class="form-control"  placeholder="Folio">
            </div>
            <br>
            <div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" class="btn login_btn" onclick="Buscar();">Buscar</button>
				   </div>
               <div class="resultado"></div>
               <br>
            <div class="text-center">
               <!-- enlace para salir-->
               <a  href="logout.php">Cerrar sesión</a>
            </div>
         </form>
      </div>
      </body>
</html>

<script type="text/javascript" language="javascript" src="mostrar.js"></script>
        