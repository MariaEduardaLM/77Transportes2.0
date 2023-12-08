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

}