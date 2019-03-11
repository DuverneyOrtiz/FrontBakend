<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/api/cliente', function (Request $request, Response $response, array $args) {
  $array = array('Manzana', 'Pera', 'Mango', 'Fresa');
  $array2 = array("Frutas"=>array("Manzana", "Pera", "Fresa", "Man go"), "Animales"=>array("Perro", "Loro", "Caballo"));
    echo json_encode( $array2);
});

$app->post('/api/clienteNew', function (Request $request, Response $response, array $args) {
    $nombre = $request->getParam('nombre');
    $apellido = $request->getParam('apellido');

    $array = array("nombre"=> $nombre, "apellido"=>$apellido);
    echo json_encode($array);
});
?>
