<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;
use Transportes\Core\Database;
use Transportes\Models\Usuarios;

class HomeController extends Controller{
   
    public function index(){
        $dados = ['titulo' => 'Atividades IFBA'];
        $this->view('inicial', $dados);
    }
public function teste()  {
$usuario = new Usuarios();
$usuario->inserir( [2,'Dudinha','dudinha@gmail.com', 'Dudinha', 2]);

}

}

