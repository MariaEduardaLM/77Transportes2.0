<?php

namespace Transportes\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct()
    {
        $servidor = "localhost";
        $banco = "77transportes";
        $usuario = "root";
        $senha = "";
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn, $usuario, $senha);

        
    }


    public function execute(string $sql, array $dados=[]):bool {

                $this->stmt = $this->conexao->prepare($sql);
                return $this->stmt->execute($dados);
                
    }
}