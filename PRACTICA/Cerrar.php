<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");
}
session_destroy();
header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");

?>
