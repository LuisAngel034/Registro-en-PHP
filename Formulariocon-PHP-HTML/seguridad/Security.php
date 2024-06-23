<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = !empty($_POST['user']) ? htmlspecialchars(trim($_POST['user'])) : "El nombre es requerido";

    $pass = !empty($_POST['pass']) ? htmlspecialchars(trim($_POST['pass'])) : "La contraseña es requerida";

    if (!empty($_POST['age'])) {
        $edad = intval(trim($_POST['age']));
        if ($edad >= 18) {
            $edadCategoria = "Mayor de edad";
        } elseif ($edad <= 17) {
            $edadCategoria = "Menor de edad";
        }
    } else {
        $edadCategoria = "La edad es requerida";
    }

    if ($usuario == "luis" && $pass == "mendoza") {
        if ($edadCategoria == "Mayor de edad") {
            echo "Hola: " . $usuario . " Tu contraseña es: " . $pass;
        } else {
            echo "No es posible acceder debido a que eres menor de edad";
        }
    } else {
        if ($usuario != "luis" || $pass != "mendoza") {
            echo "Nombre de usuario o contraseña incorrectos";
        }
    }
}
?>