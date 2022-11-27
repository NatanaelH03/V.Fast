<?php
error_reporting(0);

include 'include/conecta.php';
//consulta para genero (datos)
$genero = "SELECT * FROM genero";
$guardar = $conecta->query($genero);

$tusuario = "SELECT * FROM tusuario";
$guardarlo = $conecta->query($tusuario);

//validar que exista un boton
if(isset($_POST['registrar'])){
  $mensaje="";
  $nombre = $conecta->real_escape_string($_POST ['Nombre']);
  $apellido1 = $conecta->real_escape_string($_POST ['ApellidoP']);
  $apellido2 = $conecta->real_escape_string($_POST ['ApellidoM']);  
  $genero = $conecta->real_escape_string($_POST ['genero']);
  $tusuario = $conecta->real_escape_string($_POST ['tusuario']);
  $email = $conecta->real_escape_string($_POST ['email']);
  $nick = $conecta->real_escape_string($_POST ['nick']);
  $password = $conecta->real_escape_string($_POST ['password']);


//consultar para la inserccion
$insertar = "INSERT INTO usuarios (Nombre, ApellidoP, ApellidoM, Id_Genero, Email, Id_Tusuario, Nick, Password) VALUES('$nombre', '$apellido1', '$apellido2', '$genero', '$email', '$tusuario', '$nick', '$password')";

$guardando = $conecta->query($insertar);
if ($guardando > 0) {
    $mensaje.="<h3 class='text-success'>Tu registro se realizo correctamente</h3>";
}
else {
    $mensaje.="<h3 class='text-danger'>Tu registro se realizo incorrectamente</h3>";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
    <title>REGISTRO</title>
</head>
<body>
<div class="row d-flex justify-content-center">
<h1 class="text-center display-6 mt-5">REGISTRO | V.FAST</h1>
<h1 class="text-center display-6 mt-0">______________________________________________</h1>
<form class="" action="" method="POST">
    <input type="text" name="nick" placeholder="Nombre de Usuario" class="form-control" required>
    <input type="text" name="Nombre" placeholder="Nombre(s)" class="form-control" required>
    <input type="text" name="ApellidoP" placeholder="Apellido Paterno" class="form-control" required>
    <input type="text" name="ApellidoM" placeholder="Apellido Materno" class="form-control" required>
    <select class="form-control" name="genero" >
        <option value="">Selecciona tu genero</option>
         <?php while($row = $guardar->fetch_assoc()){?>
          <option value="<?php echo $row['Id_Genero']; ?>"<?php echo $row['NomGenero']; ?>></option>
         <?php } ?>   

    </select>

    <select class="form-control" name="tusuario" >
        <option value="">Selecciona el Tipo de Usuario</option>
         <?php while($row = $guardarlo->fetch_assoc()){?>
          <option value="<?php echo $row['Id_Tusuario']; ?>"<?php echo $row['NombreTusu']; ?>></option>
         <?php } ?>   

    </select>
    <input type="email" name="email" placeholder="Email" class="form-control" required>
    <input type="password" name="password" placeholder="Contraseña" class="form-control" required>

<input type="submit" name="registrar" value="registrar" class="btn btn-sm btn-block btn-succes">
</form>
<?php echo $mensaje; ?>
</body>
</html>