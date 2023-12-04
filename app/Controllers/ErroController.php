<?php 

namespace Transportes\Controllers;

use Transportes\Core\Controller;

class ErroController extends Controller{
    public function erro($tipo){
        switch ($tipo) {
            case '404':
        $this->view('404');
                break;
                case 'controller':
                    $this->view('erro', ['msg' => 'Controller Não Existe']);
                            break;
                            case 'metodo':
                                $this->view('erro', ['msg' => 'Metodo Não Existe No Controlador']);
                                        break;
            default:
                
                break;
        }
    }
}
