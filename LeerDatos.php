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
		$cod = $_POST['codigo'];
		$sql = $conn->prepare("SELECT empleado, fecha, proveedor, producto, cantidad, codigo FROM ingreso WHERE $cod = codigo");
		$sql->execute();
		$results = $sql->fetch(PDO::FETCH_ASSOC);

		if(count($results) > 0)
		{
			$empleado = $results['empleado'];
			$proveedor = $results['proveedor'];
			$producto = $results['producto'];
			$cantidad = $results['cantidad'];
			$codigo = $results['codigo'];
		}

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
<?PHP
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $fecha_actual = date("y/m/d - h:m:s");

?>

<form action="finEgreso.php"  method="post" class="formulario">
	<h1>Datos del Producto:</h1>
	<div class="contenedor">
		<div class="input-contenedor">
			<i class="fas fa-key icon"></i>
			<input type="text" name="codigo" value="<?=$codigo?>">
		</div>
		<div class="input-contenedor">
            <i class="fas fa-user-alt icon"></i>
            <input name="empleado" type="text" value="<?=$empleado?>"><br>
        </div>
		<div class="input-contenedor">
			<i class="fas fa-user-alt icon"></i>
			<input type="text" name="proveedor" value="<?=$proveedor?>">
		</div> 	
		<div class="input-contenedor">
            <i class="fas fa-calendar-week icon"></i>
			<input type="datetime" name="fecha" value="<?=$fecha_actual?>">
		</div> 
		<div class="input-contenedor">
			<i class="fas fa-key icon"></i>
			<input type="text" name="producto" value="<?=$producto?>">
		</div> 	
		<div class="input-contenedor">
			<i class="fas fa-key icon"></i>
			<input type="text" name="lote" value="<?=$cantidad?>">
		</div> 	  
		<div class="input-contenedor">
            <i class="fas fa-calendar-week icon"></i>
			<input type="datetime" name="vto" placeholder="Ingrese vencimiento:">
		</div> 
	</div>   
	<p>¿Es este su producto?</p>
	<button type="submit" name="egresar"> Egresar </button>
	<a href="egreso.php">Egresar otro</a>
</form>			
</body>
</html>