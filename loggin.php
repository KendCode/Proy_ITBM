

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
    

    <form method="post" action="control/control.php">

        usuario:
        <input type="text" name="usuario">
<br>
        contraseña
        <input type="text" name="contrasena">
<br>
        <input type="submit" value="ingresar">



    </form>
</body>
</html>