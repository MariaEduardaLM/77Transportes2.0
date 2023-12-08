<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;
use Transportes\Core\Database;
use Transportes\Models\DAO\UsuariosDAO;
use Transportes\Models\Entities\Usuario;


class HomeController extends Controller{
   
    public function index(){
        $dados = ['titulo' => 'Transportes'];
        $this->view('inicial', $dados);
    }
    
public function teste()  {
    $usuario = new Usuario;
    $usuario->nome = "Maria";
    $usuario->email = "maria@ifba.edu.br";
    $usuario->login = 'maria';
    $usuario->senha = '1234';
    
    UsuariosDAO::inserir( $usuario );

}

public function teste2()
{  
    $usuarios = UsuariosDAO::getAll();

    foreach($usuarios as $usuario){
        echo $usuario->nome;
        echo "<hr>";
    }
}

public function teste3()
{

    $usuario = UsuariosDAO::getById(10);
    echo "<pre>";
    var_dump($usuario);
}

public function teste4()
{
    $usuario = UsuariosDAO::getById(7);
  
    $usuario->nome = "Rebecca";
    $usuario->email = "rebecca@gmail.com.br";
    $usuario->login = "rebecca";

    UsuariosDAO::editar($usuario);

    echo "<pre>";
    var_dump($usuario);

}

public function teste5(){

    $usuario = UsuariosDAO::getById(9);
  
    if($usuario){
        UsuariosDAO::excluir($usuario);
    echo "Usuário excluído com sucesso!";
}else{
    echo "Usuário não existe";
    }

}

public function teste6()  {
    $usuario = new Usuario(
        [
            'nome'=> 'Rebecca',
            'email'=> 'rebecca@gmail.com.br',
            'login'=> 'rebecca',
            'senha'=> 1234
        ]
    );
  echo "<pre>";
   var_dump($usuario);

}

}

