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
    


}

