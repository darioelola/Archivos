<?php
session_start();
$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';
$usuario_valido = 'admin';
$clave_valida = '1234';

if ($usuario === $usuario_valido && $clave === $clave_valida) {
    $_SESSION['usuario'] = $usuario;
    echo "OK";
} else {
    echo "Usuario o clave incorrectos";
}
?>
