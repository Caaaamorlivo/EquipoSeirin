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

    require 'conex.php';

    if(isset($_REQUEST['ingresar'])){
        if(!empty($_POST['proveedor']) && !empty($_POST['producto']) && !empty($_POST['cantidad'] && !empty($_POST['empleado']) && !empty($_POST['codigo']))){    
            
            try{
                $sql = "INSERT INTO ingreso(empleado, fecha, proveedor, producto, cantidad, codigo) VALUES (:empleado, :fecha, :proveedor, :producto, :cantidad, :codigo)";
                $stmt = $conn->prepare($sql);   
                $stmt->bindParam(':empleado', $_POST['empleado']);
                $stmt->bindParam(':fecha', $_POST['fecha']);
                $stmt->bindParam(':proveedor', $_POST['proveedor']);
                $stmt->bindParam(':producto', $_POST['producto']);
                $stmt->bindParam(':cantidad', $_POST['cantidad']);
                $stmt->bindParam(':codigo', $_POST['codigo']);
    
                $stmt->execute();
            } catch(PDOException $err){
                echo $err->getMessage();
            }
            

        }
        unset($_POST);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/87af22ff01.js" crossorigin="anonymous"></script>
    <title>Empresa Algabo</title>
</head>
<body>
    <?PHP
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $fecha_actual = date("y/m/d - h:m:s");

        $empleado = $_SESSION['nombre']." ".$_SESSION['apellido'];
    ?>
    <form method="POST" action="ingreso.php" class="formulario">

        <h1>Ingreso del Producto</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="empleado" type="text" value="<?=$empleado?>"><br>
            </div>

            <div class="input-contenedor">
            <i class="fas fa-calendar-week icon"></i>
                <input name="fecha" type="datetime" value="<?= $fecha_actual ?>"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="proveedor" type="text" placeholder="Proveedor:"><br>
            </div>

            <div class="input-contenedor">
                <i class="fab fa-product-hunt icon"></i>
                <input name="producto" type="text" placeholder="Producto:"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input name="codigo" type="text" placeholder="Código:"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-cart-plus icon"></i>
                <input name="cantidad" type="text" placeholder="Cantidad:"><br>
            </div>

        </div>

    <style type="text/css">
        .boton{
            border: none;
            width: 100%;
            color: white;
            font-size: 20px;
            background: #1a2537;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            }
    </style>
        <button type="submit" name="ingresar" onClick="document.location.href='/PracticasProyecto/carga.php'"> Ingresar </button>
        <p><a class="link" href="carga.php"> Haz click aqui para ingresar de nuevo </a></p>
        <p><a class="link" href="egreso.php"> Haz click aqui para egresar </a></p>
        <p><a class="link" href="logout.php"> Salir </a></p>
    </form>
</body>
</html>