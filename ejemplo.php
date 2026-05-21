<?php
session_start();
$_SESSION['usuario'] = "andres";
echo "Sesión iniciada para: " . $_SESSION['usuario'];
?>
