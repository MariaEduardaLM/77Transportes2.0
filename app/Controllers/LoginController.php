<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;

class LoginController extends Controller{
    public function login(){
        $this->view('login', ['paginal' => 'Página de Login']);
    } 
    public function criarconta(){
        $this->view('conta', ['paginac' => 'Página de cadastro']);
    }

}



