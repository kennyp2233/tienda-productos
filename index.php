<?php
$usuario = $contrasena = "";
$recordarme = false;
if (isset($_COOKIE['usuario']) && isset($_COOKIE['contrasena']) && isset($_COOKIE['recordarme'])) {
    $usuario = $_COOKIE['usuario'];
    $contrasena = $_COOKIE['contrasena'];
    $recordarme = $_COOKIE['recordarme'];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="panel_principal.php">
        <fieldset>
            <p>Usuario:</p>
            <input type="text" name="usuario" placeholder="Usuario" value="<?php echo $usuario ?>" required>
            <p>Contraseña:</p>
            <input type="password" name="contrasena" placeholder="Contraseña" value="<?php echo $contrasena ?>" required>
            <p>Recordarme: <input type="checkbox" name="recordarme" value="1" <?php echo ($recordarme) ? "checked" : "" ?>>
            </p>
            <input type="submit" name="login" value="Iniciar sesión">
        </fieldset>
    </form>
</body>

</html>