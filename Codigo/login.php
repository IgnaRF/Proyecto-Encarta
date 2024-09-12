<?php

$direccion = "localhost";
$nombreBD = "id22287198_proyectoencartawikired6";
$usuario = "id22287198_encartawikired06";
$psw = "_Proyectoameghino6";

$enlace = mysqli_connect($direccion, $usuario, $psw, $nombreBD);

if (mysqli_connect_error()) {
die("Conexión fallida: " . mysqli_connect_error());
}

mysqli_set_charset($enlace, "utf8");

$username = $_POST['user-login'];
$password = $_POST['contraseña-login'];


$consulta = "SELECT * FROM usuarios WHERE username='$username' and password='$password'";
$login = mysqli_query($enlace, $consulta);

$fila = mysqli_fetch_row($login);

if (mysqli_num_rows($login) == 1) {
    echo "<script>alert('Inicio de sesion exitoso');window.location='recuperacion_psw.html';  </script>";
    header('Location: recuperacion_psw.html');
    
     
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location='index.html'; </script>";
}

mysqli_close($enlace);
?>
