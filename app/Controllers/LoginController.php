<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;
use Transportes\Models\DAO\UsuariosDAO;
use Transportes\Models\Entities\Usuario;

class LoginController extends Controller{
    public function login(){
        $this->view('login', ['paginal' => 'Página de Login']);
    } 
    public function criarconta()
    {
       
        $this->view('conta', ['paginac' => 'Página de cadastro']);
    }

    public function cadastrarconta()
    {

       
           $usuario = new Usuario($this->post());
           $usuario->nome = $this->post('nome');
           $usuario->email = $this->post('email');
           $usuario->login = $this->post('login');
           $usuario->senha = $this->post('senha');

         if( UsuariosDAO::inserir($usuario) ){

         flash("Usuário {$usuario->nome} foi cadastrado com sucesso!");

            redireciona('login');
         }

       
    }
}



