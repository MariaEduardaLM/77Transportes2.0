<?php

namespace Transportes\Models;

use PDO;
use Transportes\Core\Database;

class Usuarios{
 public function inserir($usuario){
    $db = new Database();
    $sql = "INSERT INTO 
    usuarios (id,nome,email,login,senha) 
    VALUES (?,?,?,?,?)";
    var_dump($db->execute($sql,$usuario));
 }  
}