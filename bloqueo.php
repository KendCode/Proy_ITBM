<?php

session_start();
if($_SESSION['usuario']!='alfredo')
{
    header('location:loggin.php');
    exit();
}


?>