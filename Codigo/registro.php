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

$nomUsr = mysqli_real_escape_string($enlace, $_POST["nombre"]);
$email = mysqli_real_escape_string($enlace, $_POST["email"]);
$password = mysqli_real_escape_string($enlace, $_POST["password"]);


$consulta = "SELECT * FROM usuarios WHERE (username = '$nomUsr') OR (email = '$email' )";
$resultadoConsulta = mysqli_query($enlace, $consulta);

if (mysqli_num_rows($resultadoConsulta) >0) {
    
    echo "<script>alert('El nombre de usuario o email ya está registrado'); window.location='index.html';</script>";
    
} else {
    
    $insertarDato = "INSERT INTO usuarios(username, password, email) VALUES ('$nomUsr', '$password', '$email')";
    $resultado = mysqli_query($enlace, $insertarDato);

    if ($resultado) {
        
        header('Location: index.html');
        echo "<script> alert('Registro exitoso'); </script>";
       
    } else {
        echo "Error al registrar: ".mysqli_error($enlace);
    }
    
}

mysqli_close($enlace);
?>


	
	