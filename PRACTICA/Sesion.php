<?php
session_start();
if(isset($_SESSION['usuario'])){
header("Location: http://localhost/progra/Practica5-/PRACTICA/Directorio.php");
}
?>
<html>
  <head>
<title>Sesion</title>
  </head>
  <body>
    <h2>Sesion</h2>
    <form method="post" action="Iniciar.php">
      
<label for="txtUsuario">Usuario </label><br/>
      <input type="text" name="txtUsuario" /> <p/>
      
<label for="txtUsuario">Password</label><br/>
      <input type="password" name="txtPassword" /> <p/>

<input type="submit" value="Entrar" />
   
 </form>
  	
  </body>

</html>
