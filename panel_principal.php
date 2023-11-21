<?php
$categorias = "";
$usuario = $contrasena = $lang = "";

if ((isset($_POST) && !empty($_POST)) || (isset($_COOKIE) && !empty($_COOKIE))) {
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        if (isset($_POST['recordarme'])) {
            setcookie('usuario', $usuario, 0);
            setcookie('contrasena', $contrasena, 0);
        } else {
            if (isset($_COOKIE)) {
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, "", time() - 3600);
                }
            }
        }
    }
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        if ($lang == "EN") {
            $categorias = file_get_contents("categorias_en.txt");
            setcookie('lang', $lang, 0);
        }
    } else {
        setcookie('lang', "ES", 0);
        $categorias = file_get_contents("categorias_es.txt");
    }
    if (isset($_GET['cerrar'])) {
        if ($_GET['cerrar'] == 1) {
            if (isset($_COOKIE)) {
                foreach ($_COOKIE as $key => $value) {
                    setcookie($key, "", time() - 3600);
                }
            }
            header('Location: index.php');
        }
    }
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principals</title>
</head>

<body>
    <h1>Panel Principal</h1>
    <h3>Bienvenido Usuario:<?php echo $usuario ?></h2>
        <p><a href="panel_principal.php">ES(Español)</a>|<a href="panel_principal.php?lang=EN">EN(English)</a></p>
        <a href="panel_principal.php?cerrar=1">Cerrar Sesión</a>
        <h2>Lista de productos</h2>
        <p><?php echo $categorias ?></p>
</body>

</html>