<?php include("conexion/conexion.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO DE MODIFICACIÓN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>FORMULARIO DE MODIFICACIÓN</h3>

<?php 

$ci=$_POST['ci'];


//primer paso
$consulta="SELECT * FROM estudiante WHERE ci = '$ci'";
//$consulta="SELECT * FROM estudiante";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el ci buscado es: ".$fila['ci'];
//echo "el nombre del buscado es: ".$fila['nombre'];
?>




<form action="control/abm.php" method="post">
	CI:
	<input type="text" name="ci" readonly value="<?php echo $fila['ci']; ?>" >
	<br>
	NOMBRE:
	<input type="text" name="nombre" value="<?php echo $fila['nombre'];?>">

	<br>
APELLIDO PATERNO:
<input type="text" name="ap_pat" value="<?php echo $fila['ap_pat'];?>">



	<br>
APELLIDO MATERNO:
<input type="text" name="ap_mat" value="<?php echo $fila['ap_mat'];?>">


	<br>
EDAD:
<input type="text" name="edad" value="<?php echo $fila['edad'];?>">


	<br>
GENERO:
<input type="text" name="genero" value="<?php echo $fila['genero'];?>">


	<br>
CELULAR:
<input type="text" name="celular" value="<?php echo $fila['celular'];?>">


	<br>
CONTRASEÑA:
<input type="text" name="contrasena" value="<?php echo $fila['contrasena'];?>">


<input type="submit" name="btn3" value="MODIFICAR">
</form>

<?php
}
?>

</body>
</html>