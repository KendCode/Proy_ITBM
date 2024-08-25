

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
$consulta="SELECT * FROM estudiante";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el ci buscado es: ".$fila['ci'];
//echo "el nombre del buscado es: ".$fila['nombre'];
?>

<table border="2">

	<tr>
		<th>CI</th>
		<th>NOMBRE</th>
		<th>APELLIDO PATERNO</th>
		<th>APELLIDO MATERNO</th>
		<th>GENERO</th>
		<th>EDAD</th>
		<th>CELULAR</th>
		<th>CONTRASEÑA</th>
		<th>ROL</th>

	</tr>
	<tr>
		<td><?php echo $fila['ci'];?></td>
		<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['ap_pat'];?></td>
			<td><?php echo $fila['ap_mat'];?></td>
			<td><?php echo $fila['genero'];?></td>
			<td><?php echo $fila['edad'];?></td>
			<td><?php echo $fila['celular'];?></td>
			<td><?php echo $fila['contrasena'];?></td>
			<td><?php echo $fila['id_sesion'];?></td>
	</tr>


</table>


<?php
}


?>







</body>
</html>