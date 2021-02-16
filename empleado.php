<?php
    session_start();

    if(isset($_SESSION['tiempo']) ) {

        $inactivo = 300;

        $vida_session = time() - $_SESSION['tiempo'];

           if($vida_session > $inactivo)
            {
                session_unset();
                session_destroy();     
                header("Location: /PracticasProyecto/login.php");

                exit();
            }

    }
    $_SESSION['tiempo'] = time();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Empresa Algabo</title>
</head>
<body>
    <div class="formulario">
        <h1>¡Buen día empleado!</h1>
        <p>¿Quieres ingresar productos?<a class="link" href="ingreso.php"> Ingrese aquí </a></p>
        <p>¿Quieres egresar productos?<a class="link" href="egreso.php"> Egrese aquí </a></p>
    </div> 
</body>
</html>