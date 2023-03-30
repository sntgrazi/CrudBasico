<?php

namespace App\Model;

final class ClienteModel{

    private $id;

    private $nome;

    private $email;

    private $telefone;

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id): ClienteModel{
        $this->id = $id;
        return $this;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): ClienteModel{
        $this->nome = $nome;
        return $this;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email): ClienteModel{
        $this->email = $email;
        return $this;
    }

    public function getTelefone(): string{
        return $this->telefone;
    }

    public function setTelefone(string $telefone): ClienteModel{
        $this->telefone = $telefone;
        return $this;
    }

}


