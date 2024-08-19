<?php
$usuario ="root";

$contrasena ="";

$bd_datos="itbm";

$servidor ="localhost";

//conexion a la base de datos
//mysql_connect(servidor, usuario, contrasena, base de datos) 
//OR DIE MENSAJE PARA SABER SI SE CONECTO O NO 
$conexion = mysqli_connect("$servidor", "$usuario", "$contrasena", "$bd_datos") or die ("no se conecto a la base de datos, contactese con soporte tecnico");

?>