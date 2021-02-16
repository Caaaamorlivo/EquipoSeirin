<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /PracticasProyecto/empleado.php');
  }


  require 'conex.php';

  if(!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password, nombres, apellidos FROM empleados WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results)> 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        $_SESSION['nombre'] = $results['nombres'];
        $_SESSION['apellido'] = $results['apellidos'];
        header('Location: /PracticasProyecto/empleado.php');
    }

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
    

    <form action="login.php"  method="post" class="formulario">
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="password" placeholder="Contraseña">
            </div>       
        </div>   

        <button type="submit">Entrar</button>

        <p>¿No tienes cuenta?<a class="link" href="registro.php"> Requistrate aquí </a></p>
    </form>
    
</body>
</html>