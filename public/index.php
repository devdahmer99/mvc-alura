<?php

require '../vendor/autoload.php';

use Alura\Cursos\Controllers\InterfaceControladorRequisicao;


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}
$classControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controller */
$controller = new $classControladora();
$controller->processaRequisicao();



