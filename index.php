<?php
$controller = $_GET['controller'] ?? 'UsuarioController';
$action = $_GET['action'] ?? 'mostrarLogin';

require_once("Controller/$controller.php");
$controllerInstance = new $controller();
$controllerInstance->$action();
?>
