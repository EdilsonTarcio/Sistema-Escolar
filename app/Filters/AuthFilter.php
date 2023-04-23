<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //Validar a sessão, bem como o perfil
        $session = service('session');
        if(! in_array($session->get('perfil'), $arguments)){            
            //se não estiver logadio
            if(isset($_SESSION['id']) == null){
                return redirect()->to('login');
            }
        
            //Para quem não tem o perfil permitido
            return redirect()->to('404');
        }

    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
