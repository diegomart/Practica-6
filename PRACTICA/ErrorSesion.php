<html>
  <head>

  <title>Practica 5</title>
  </head>
  <body>
<?php


   $_SESSION['visitas'] [] = mktime();
    if (!isset($_SESSION['visitas'])) {
      	header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");

    } else {
    
    

  echo"<head>

			<h2>Error en Sesion</h2> 

 		 </head>


  		<body>
			 ";
	
	echo "<a href=Sesion.php><h4>'Intente de nuevo'</h4></a>";


	echo "<h2>Error<br> 'El usuario o la contrasena son incorrectos' </ h2>";
}
?>

  </body>



</html