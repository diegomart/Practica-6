<html>
  <head>
  
  <title> Inicio </title>

  </head>
  <body>
    
<?php
   
    $Usuario = $_POST['txtUsuario'];
    $Password = $_POST['txtPassword'];



if( ($Usuario == "Tacuache" && $Password == "tacuache") ||
     ($Usuario == "Invitado" && $Password == "2087"))
{

	session_start();
	$_SESSION["usuario"] = $Usuario;
	header("Location: http://localhost/progra/Practica5-/PRACTICA/Directorio.php");
      }

      else{


      header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");
 
      	
	}
?>
 
   	
</body>

</html>
