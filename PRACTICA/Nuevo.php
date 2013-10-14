  <?php
session_start();
if(!isset($_SESSION['usuario'])){
header("Location: http://localhost/progra/Practica5-/PRACTICA/Sesion.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
<title>Nuevo</title>
  </head>

  <body>

    <h2>Crear contacto</h2>

<a href="Cerrar.php"><h3>Cerrar Sesion</h3></a>
<form method="post" action="Ver.php">    
      
<label for="txtNombre">Nombre </label><br/>
      <input type="textnombre" name="txtNombre" /> <p/>
      
<label for="txtTelefono">Telefono</label><br/>
      <input type="texttelefono" name="txtTelefono" /> <p/>

<label for="txtCelular">Celular</label><br/>
      <input type="textcelular" name="txtCelular" /> <p/>

<label for="txtDomicilio">Domicilio</label><br/>
      <input type="textdomicilio" name="txtDomicilio" /> <p/></br>

<input type="submit" value="Guadar" />
   
 </form>
  	
  </body>

</html>
