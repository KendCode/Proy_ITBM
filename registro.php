<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO DE REGISTRO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>FORMULARIO DE REGISTRO</h3>



<form action="control/abm.php" method="post" enctype="multipart/form-data">
	CI:
	<input type="text" name="ci" >
	<br>
	NOMBRE:
	<input type="text" name="nombre" >

	<br>
APELLIDO PATERNO:
<input type="text" name="ap_pat" >



	<br>
APELLIDO MATERNO:
<input type="text" name="ap_mat" >


	<br>
EDAD:
<input type="text" name="edad">


	<br>
GENERO:

<select name="genero">
  <option value="masculino">Masculino</option>
  
  <option value="femenino">Femenino</option>
</select>


	<br>
CELULAR:
<input type="text" name="celular">


	<br>
CONTRASEÑA:
<input type="text" name="contrasena">

GENERO:

<select name="id_sesion">
  <option value="1">Estudiante</option>
  
  <option value="2">Docente</option>
</select>

<br> FOTOGRAFIA
<input type="file" name="archivo">

<br>

<input type="submit" name="btn4" value="REGISTRAR">
</form>



</body>
</html>