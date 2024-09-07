<?php

include ("../conexion/conexion.php");
?>
<?php
if(isset($_POST['btn1'])){

	$btn1=$_POST['btn1'];
	if($btn1=="ELIMINAR")
	{



$ci=$_POST['ci'];
//echo "el ci buscado es: ".$ci;

//DELETE FROM estudiante WHERE estudiante.ci = '$ci'
// primer
$consulta= "DELETE FROM estudiante WHERE estudiante.ci = '$ci'";
//segundo paso
mysqli_query($conexion,$consulta);
echo "<script>alert('usuario Eliminado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';

	}
}
?>

<?php

if(isset($_POST['btn3'])){

	$btn3=$_POST['btn3'];
	if($btn3=="MODIFICAR")
	{

$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
//
//echo "el ci es: ".$ci."y el nombre es: ".$nombre;
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$celular=$_POST['celular'];
$contrasena=$_POST['contrasena'];

//primer paso
$consulta="UPDATE estudiante SET nombre = '$nombre', ap_pat = '$ap_pat', ap_mat='$ap_mat', genero = '$genero', celular='$celular', edad ='$edad', contrasena='$contrasena' WHERE estudiante.ci = '$ci'";

//segundo paso
mysqli_query($conexion,$consulta);

echo "<script>alert('usuario modificado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';

	}
}

?>


<?php

if(isset($_POST['btn4'])){

	$btn4=$_POST['btn4'];
	if($btn4=="REGISTRAR")
	{

$ci=$_POST['ci'];
//echo "el nuevo ci es: ".$ci;
$nombre=$_POST['nombre'];
$ap_pat=$_POST['ap_pat'];
$ap_mat=$_POST['ap_mat'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$celular=$_POST['celular'];
$contrasena=$_POST['contrasena'];
$id_sesion=$_POST['id_sesion'];

// primer paso para el query
$consulta="INSERT INTO estudiante (ci, nombre, ap_pat, ap_mat, genero, celular, edad, contrasena, id_sesion) VALUES ('$ci', '$nombre', '$ap_pat', '$ap_mat', '$genero', '$celular', '$edad', '$contrasena', '$id_sesion')";
//segundo paso
mysqli_query($conexion,$consulta);

echo "<script>alert('usuario registrado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';


}
}
?>