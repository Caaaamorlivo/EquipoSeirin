<?php
    require 'conex.php';

    function crearId(){

        $DNI = $_POST['DNI'];
        $id = dechex($DNI);

        return $id;
    }

    if(!empty($_POST['names']) && !empty($_POST['lastnames']) && !empty($_POST['DNI']) && !empty($_POST['puesto']) && !empty($_POST['usuario']) && !empty($_POST['password'])){
        $sql = "INSERT INTO empleados(id, nombres, apellidos, dni, puesto, usuario, password) VALUES (:id, :names, :lastnames, :DNI, :puesto, :usuario, :password)";
        $stmt = $conn->prepare($sql);
        $id = crearId();
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':names', $_POST['names']);
        $stmt->bindParam(':lastnames', $_POST['lastnames']);
        $stmt->bindParam(':DNI', $_POST['DNI']);
        $stmt->bindParam(':puesto', $_POST['puesto']);
        $stmt->bindParam(':usuario', $_POST['usuario']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
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


<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>

    <form method="POST" action="registro.php" class="formulario">

        <h1>Registrarse</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="names" type="text" placeholder="Nombres"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="lastnames" type="text" placeholder="Apellidos"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="DNI" type="text" placeholder="DNI"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="puesto" type="text" placeholder="Puesto de Trabajo"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-alt icon"></i>
                <input name="usuario" type="text" placeholder="Nombre de Usuario"><br>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input name="password" type="password" placeholder="Contraseña"><br>
            </div>
            
        </div>
        <button type="submit" name="register" >Enviar</button>

        <p>¿Ya tienes cuenta?<a class="link" href="login.php"> Iniciar Sesión </a></p>
    </form>
</body>
</html>