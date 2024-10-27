

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


include("bloqueo.php");
verifica_sesion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">


</head>
<body>
    

<form action="" method="post">

	<h3>Ingrese el numero de cedula de identidad del estudiante que esta buscando</h3>
	<input type="number" name="ci">
	<input type="submit" name="btn1" value="BUSCAR">


</form>


<table id="example" class="table table-striped" style="width:100%">
<!--<table border="2">-->
<thead>
	

	<tr>
		<th>CI</th>
		<th>NOMBRE</th>
		<th>APELLIDO PATERNO</th>
		<th>APELLIDO MATERNO</th>
		<th>FOTO</th>
		<th>GENERO</th>
		<th>EDAD</th>
		<th>CELULAR</th>
		<th>CONTRASEÑA</th>
		<th>ROL</th>
		<th>ELIMINAR</th>
		<th>MODIFICAR</th>

	</tr>
</thead>
  <tbody>
<?php
//$ci=$_POST['ci'];

//echo "hola mundo";
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


	<tr>
		<td><?php echo $fila['ci'];?></td>
		<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['ap_pat'];?></td>
			<td><?php echo $fila['ap_mat'];?></td>
			<?php $foto=$fila['foto']; ?>
			<td><img src='/2-2024/images/fotos/<?php echo $foto;?>' alt="" width="100" height="100"></td>
			<td><?php echo $fila['genero'];?></td>
			<td><?php echo $fila['edad'];?></td>
			<td><?php echo $fila['celular'];?></td>
			<td><?php echo $fila['contrasena'];?></td>
			<td><?php echo $fila['id_sesion'];?></td>
			<?php $ci=$fila['ci']; 
			//echo "el ci buscado es: ".$ci;
			?>

			<td><form action="control/abm.php" method="post">
				<input type="hidden" name="ci" value="<?php echo $ci;?>">
			<input type="submit" name="btn1" value="ELIMINAR">	
			</form></td>
			<td>
				<form action="modificar.php" method="post">
				<input type="hidden" name="ci" value="<?php echo $ci;?>">
			<input type="submit" name="btn2" value="MODIFICAR">	
			</form>
			</td>
	</tr>






<?php
}


?>
</tbody>
</table>

<p>REGISTRO DE NUEVO ESTUDIANTE</p>
<form action="registro.php">
	
	<input type="submit" value="REGISTRAR NUEVO ESTUDIANTE">
</form>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

<script>
        $('#example').DataTable({
            pageLength: 10,
            language: {
                "lengthMenu": "Mostrar _MENU_ entradas",
                "search": "Buscar:"
            }
        });
</script>


</body>
</html>