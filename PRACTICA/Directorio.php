<?php
session_start();
if(!isset($_SESSION['usuario'])){
header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");
}
?>
<html>
  <head>
  
<title> Directorio </title>
  </head>
  <body>

<a href="Cerrar.php"><h4>Cerrar Sesion</h4></a>
   <form method="post" action="Nuevo.php">
      
<input type="submit" value="Nuevo" />
   
 </form>	
</body>

</html>
