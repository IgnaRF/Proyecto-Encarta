<?php
// Archivo recuperar.php

// Conexión a la base de datos (ya proporcionada en tu código)
$direccion = "localhost";
$nombreBD = "id22287198_proyectoencartawikired6";
$usuario = "id22287198_encartawikired06";
$psw = "_Proyectoameghino6";

$enlace = mysqli_connect($direccion, $usuario, $psw, $nombreBD);

if (mysqli_connect_error()) {
    die("Conexión fallida: " . mysqli_connect_error());
}

mysqli_set_charset($enlace, "utf8");

// Procesamiento del formulario de recuperación de contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico enviado desde el formulario
    $email = mysqli_real_escape_string($enlace, $_POST['email']);

    // Verificar si el correo electrónico existe en la base de datos
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($enlace, $query);

    if (mysqli_num_rows($result) == 1) {
        // Generar un token único para la recuperación de contraseña (puedes usar uniqid() o alguna función de generación de token segura)
        $token = uniqid();

        // Guardar el token en la base de datos junto con el correo electrónico para verificar la solicitud posteriormente
        $update_query = "UPDATE usuarios SET token='$token' WHERE email='$email'";
        mysqli_query($enlace, $update_query);

        // Enviar el correo electrónico con el link de recuperación
        $to = $email;
        $subject = 'Recuperación de Contraseña';
        $message = 'Para recuperar tu contraseña, haz clic en el siguiente enlace: <a href="http://tudominio.com/reset_password.php?email=' . $email . '&token=' . $token . '">Restablecer Contraseña</a>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: tu_email@example.com' . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Se ha enviado un correo con instrucciones para recuperar tu contraseña'); window.location='index.html';</script>";
        } else {
            echo "<script>alert('Error al enviar el correo de recuperación');</script>";
        }
    } else {
        echo "<script>alert('El correo electrónico ingresado no está registrado');window.location='index.html'; </script>";
    }
}

mysqli_close($enlace);
?>
