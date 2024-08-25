

    <?php
include("encabezado.html");
?>
</head>
<body>
<?php

include("conexion/conexion.php");
session_start();
echo "bienvenido usuario: ".$_SESSION['admin'];
echo "<br>con nombre: ".$_SESSION['nombre'];
//include("bloqueo.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">

	<h3>Ingrese el numero de cedula de identidad del estudiante que esta buscando</h3>
	<input type="number" name="ci">
	<input type="submit" name="btn1" value="BUSCAR">


</form>



<?php
$ci=$_POST['ci'];

//primer paso
//$consulta="SELECT * FROM estudiante WHERE ci = '$ci'";
$consulta = "SELECT e.ci, e.nombre, e.ap_pat, e.ap_mat, e.genero, e.edad, e.celular, e.contrasena, s.descripcion_sesion 
             FROM estudiante e
             JOIN sesion s ON e.id_sesion = s.id_sesion";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
if (mysqli_num_rows($respuesta) > 0) {
        // Muestra el encabezado solo una vez
        echo '<table border="2">';
        echo '<tr>
                <th>CI</th>
                <th>NOMBRE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>GENERO</th>
                <th>EDAD</th>
                <th>CELULAR</th>
                <th>CONTRASEÑA</th>
                <th>ROL</th>
              </tr>';

        while ($fila = mysqli_fetch_array($respuesta)) {
            echo '<tr>
                    <td>' . $fila['ci'] . '</td>
                    <td>' . $fila['nombre'] . '</td>
                    <td>' . $fila['ap_pat'] . '</td>
                    <td>' . $fila['ap_mat'] . '</td>
                    <td>' . $fila['genero'] . '</td>
                    <td>' . $fila['edad'] . '</td>
                    <td>' . $fila['celular'] . '</td>
                    <td>' . $fila['contrasena'] . '</td>
                    <td>' . $fila['descripcion_sesion'] . '</td>
                  </tr>';
        }

        echo '</table>';
    } else {
        echo 'No se encontraron resultados.';
    }
?>

</body>
</html>