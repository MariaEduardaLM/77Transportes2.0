<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;

class ErroController extends Controller{
    public function erro404(){
        
        $this->view('erro');
    }
}

