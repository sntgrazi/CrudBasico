<?php

namespace App\Controller;

use App\DAO\ClienteDAO;
use App\Model\ClienteModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

final class ClienteController {

    public function getClientes(Request $request, Response $response, array $args)
    {

        $clienteDAO = new ClienteDAO();
        $clientes = $clienteDAO->getAllClientes();

        $response->getBody()->write(json_encode($clientes));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function insertCliente(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        $clienteDAO = new ClienteDAO();
        $cliente = new ClienteModel();
        $cliente->setNome($data['nome']) 
             ->setEmail($data['email'])
             ->setTelefone($data['telefone']);
        $clienteDAO->insertCliente($cliente);

        
        $response->getBody()->write(json_encode(['message' => 'Cliente inserido com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }
    
    public function updateCliente(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $clienteDAO = new ClienteDAO();
        $cliente = new ClienteModel();
        $cliente->setNome($data['nome'])
             ->setEmail($data['email'])
             ->setTelefone($data['telefone'])
             ->setId($data['id']);
        $clienteDAO->updateCliente($cliente);

        $response->getBody()->write(json_encode(['message' => 'Cliente atualizado com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }
    
    public function deleteCliente(Request $request, Response $response, array $args){

        $data = $request->getParsedBody();

        $clienteDAO = new ClienteDAO;
        $cliente = new ClienteModel();
        $cliente->setId($data['id']);
        $clienteDAO->deleteCliente($cliente);

        $response->getBody()->write(json_encode(['message' => 'Cliente deletado com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }

}