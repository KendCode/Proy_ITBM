<?php
include("../conexion/conexion.php");





$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//echo "el usuario es:".$usuario;


// primer paso guardar la consulta
$consulta="SELECT * FROM estudiante WHERE ci='$usuario'";
// segundo paso mostrar la consulta
// mysqli_query (agregamos la variable de la conexion, la consulta que queremos trabajar)
$resultado= mysqli_query($conexion,$consulta);

// tercer paso 
// mostrar lo recuperado de la base de datos en el ejercicio
// mysqli_fetch_assoc(varibale dela conexion y la consulta);
$resp= mysqli_fetch_assoc($resultado);

//echo "el ci del usuario usuario es: ".$resp['ci'];

//echo "<br>el nombre del usuario usuario es: ".$resp['nombre'];
//echo "<br>el celular del usuario usuario es: ".$resp['celular'];



if($usuario==$resp['ci'] && $contrasena==$resp['contrasena'])
{
    switch($resp['id_sesion']){
        case 1:
            echo "Usuario Estudiante";
            break;
        case 2:
            echo "Usuario Administrativo";
            break;
        case 3:
            echo "Usuario Docente";
            break;
        case 4:
            echo "Usuario Rector";
            break;
    }
}else{
    echo "usuario incocorrecto";
}



?>
