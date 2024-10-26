<?php

function verifica_sesion()
{

if (!$_SESSION['admin']){
	// unset(variable de sesion)  destruye una variable
    unset($_SESSION);
	header ("location: loggin.php");
}

}
/*
if($_SESSION['admin']=='si')
{
     header('location:loggin.php');
    exit(); 
} else {

	 
}
*/

?>