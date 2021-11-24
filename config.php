<?php
$mysqli=new mysqli('108.170.52.115','fTechCoDem_Ismael28Oct','DPp5kHSd9#5cM9ZF&8CWBJUsE','ftechDemoColombia');
if($mysqli->connect_errno):
        echo "Error: ".$mysqli->connect_error."\n";
   exit;
endif;

$sql = "INSERT INTO tabla ('campo','campo')VALUES()";

/*
+----------------------------------------------------------------------------------------------------------------------------------------------------+
| Datos de conexion a BD  |
+----------------------------------------------------------------------------------------------------------------------------------------------------+
*/
define("DB_HOST","108.170.52.115");
define("DB_USER","fTechCoDem_Ismael28Oct");
define("DB_PASS","DPp5kHSd9#5cM9ZF&8CWBJUsE");
define("DB_NAME","ftechDemoColombia");


