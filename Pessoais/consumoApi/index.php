<?php
//Definição de caesso
define('CONTROL', true);

//Lista de rotas
$rotas = require __DIR__ . '/inc/rotas.php';

//Buscar rota na URL
$rota = $_GET['rota'] ?? 'home';

//Verifica rota existente
if(!in_array($rota, $rotas)) {
    //Caso não exita rota recebe 404
    $rota = '404';
}

switch($rota) {
    case '404':
        require_once __DIR__ .'/inc/header.php';
        require_once __DIR__ .'/scripts/404.php';
        require_once __DIR__ .'/inc/footer.php';
        break;
    case 'home':
        require_once __DIR__ .'/inc/header.php';
        require_once __DIR__ .'/scripts/home.php';
        require_once __DIR__ .'/inc/footer.php';
        break;
    //Por precaução ultilizar o default mesmo que não seja acessado diretamente
    default: 
        require_once __DIR__ .'/inc/header.php';
        require_once __DIR__ .'/scripts/404.php';
        require_once __DIR__ .'/inc/footer.php';
        break;
}