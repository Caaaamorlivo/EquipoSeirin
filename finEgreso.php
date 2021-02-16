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

    if(isset($_REQUEST['egresar']))
    {
        $sql = "INSERT INTO egreso(empleado,fecha,id_producto,fabricante,producto,lote,vto) VALUES (:empleado,:fecha,:id_producto,:fabricante,:producto,:lote,:vto)";
        $stmt = $conn->prepare($sql);   
        $stmt->bindParam(':empleado', $_POST['empleado']);
        $stmt->bindParam(':fecha', $_POST['fecha']);
        $stmt->bindParam(':id_producto', $_POST['codigo']);        
        $stmt->bindParam(':fabricante', $_POST['proveedor']);
        $stmt->bindParam(':producto', $_POST['producto']);
        $stmt->bindParam(':lote', $_POST['lote']);
        $stmt->bindParam(':vto', $_POST['vto']);
        $stmt->execute();

        $cod = $_POST['codigo'];
        $sql = $conn->prepare("DELETE FROM ingreso WHERE $cod = codigo");
        $sql->execute();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Empresa Algabo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/87af22ff01.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <div class="formulario"> 
        <h1>Su producto ha sido egresado!</h1>
        <p><a class="link" href="carga.php"> Haz click aqui para ingresar</a></p>
        <p><a class="link" href="egreso.php"> Haz click aqui para egresar de nuevo</a></p>
        <p><a class="link" href="logout.php"> Salir </a></p>
    </div>
</body>
</html>