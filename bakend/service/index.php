<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

//SERVICIOS PARA CLIENTES
require './cliente/cliente.php';


$app->run();

?>
