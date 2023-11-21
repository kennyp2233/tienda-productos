<?php

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
            <input type="text" name="usuario" placeholder="Usuario" required>
            <p>Contraseña:</p>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <p>Recordarme: <input type="checkbox" name="recordarme" value="1">
            </p>
            <input type="submit" name="login" value="Iniciar sesión">
        </fieldset>
    </form>
</body>

</html>