<?php

namespace Transportes\Models\Entities;

use Transportes\Core\Entity;

class Usuario extends Entity{
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $login;
    protected ?string $senha;
    
    
    public function setSenha($valor)
    {
        $this->senha = password_hash($valor,PASSWORD_DEFAULT);
    }

 

}