

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
include("encabezado.html");
?>
</head>
<body>
<?php

session_start();
echo "bienvenido usuario: ".$_SESSION['usuario'];
echo "<br>bienvenido contraseña: ".$_SESSION['contrasena'];
include("bloqueo.php");
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
    


</body>
</html>