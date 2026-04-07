<?php

// Impede o acesso direto ao arquivo
define('CONTROL', true);

// Carrega as rotas
$routes = require_once 'inc/routes.php';

// Verifica a rota solicitada
$route = $_GET['route'] ?? 'home';

// Verifica se a rota existe
if (!array_key_exists($route, $routes)) {
    $route = '404';
}

switch ($route) {
    case 'home':
        // Carrega o arquivo da rota
        require_once'inc/header.php';
        require_once "script/{$routes[$route]}";
        require_once'inc/footer.php';
        break;
    case '404':
        // Carrega o arquivo da rota
        require_once'inc/header.php';   
        require_once "script/{$routes['404']}";
        require_once 'inc/footer.php';
        break;
}

// Carrega o arquivo da rota
require_once "script/{$routes[$route]}";