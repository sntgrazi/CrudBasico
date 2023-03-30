<?php 

use Slim\Factory\AppFactory;
use Slim\Middleware\BodyParsingMiddleware;
use App\Controller\ClienteController;

require "../vendor/autoload.php";
header("Access-Control-Allow-Origin: *");


$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->AddErrorMiddleware(true,true,true);

$app->get('/clientes', ClienteController::class . ':getClientes');                              
$app->post('/inserir', ClienteController::class . ':insertCliente');
$app->put('/update', ClienteController::class . ':updateCliente');
$app->delete('/delete', ClienteController::class . ':deleteCliente');

$app->run();