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
    <script src="https://kit.fontawesome.com/87af22ff01.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Empresa Algabo</title>
</head>
<body>
    <form action="LeerDatos.php" method="post" class="formulario">
        <div class="contenedor">
            <br><br><br>
            <h1>Ingrese el codigo del producto:</h1>
            <div class="input-contenedor">
                <i class="fab fa-product-hunt icon"></i>
                <input name="codigo" type="text" placeholder="Codigo:"><br>
            </div>
                <button type="submit" name="egresar" onClick="document.location.href='/PracticasProyecto/cargaEgreso.php'"> Leer producto </button>
                <p><a class="link" href="ingreso.php"> Haz click aquí para ingresar </a></p>
                <p><a class="link" href="logout.php"> Salir </a></p>
        </div>
	</form>
</body>
</html>