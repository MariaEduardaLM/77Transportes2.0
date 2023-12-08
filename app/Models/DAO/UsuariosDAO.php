<?php

namespace Transportes\Models\DAO;

use PDO;
use Transportes\Core\DAO;
use Transportes\Core\Database;
use Transportes\Models\Entities\Usuario;

class UsuariosDAO extends DAO
{
  protected static string $tabela = "usuarios" ;
  protected static string $classe = Usuario::class;
  
 public static function inserir($usuario)
 {
    $db = new Database;
    $tabela = static::$tabela;
    $sql = "INSERT INTO {$tabela} (nome,email,login,senha) VALUES (?,?,?,?)";
     
     
     $dados = [
         $usuario->nome,
         $usuario->email,
         $usuario->login,
         $usuario->senha             
     ];
     
     
   return $db->execute($sql,$dados);
 }  

 

 

 public static function editar($usuario)
 {
    $db = new Database;
    $tabela = static::$tabela;
    $sql = "UPDATE  {$tabela} SET
               nome = ?, email = ?, login = ?, senha = ? WHERE id = ?";

    $dados =  [
      $usuario->nome,
      $usuario->email,
      $usuario->login,
      $usuario->senha,
      $usuario->id
    ];

    return $db->execute($sql,$dados);

 }


}