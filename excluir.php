<?php
require_once("backend/controllers/Ccadastro.php");

$controller = new ControllerCadastro();
$resultado = $controller->excluir($_GET['id']);