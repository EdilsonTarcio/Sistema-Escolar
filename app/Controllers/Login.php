<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if($this->request->getMethod() === 'post'){
            $usuaarioModel = model('UsuarioModel');
            $usuarioCheck = $usuaarioModel->check(
                $this->request->getPost('usuario'),
                $this->request->getPost('senha')
            );
            if(! $usuarioCheck){
                $data['msg'] = 'Usuario e/ou senha incorretos';
            }else{
                //Salva os dados na sessão e redireciona
                $this->session->set('nome', $usuarioCheck->nome);
                $this->session->set('perfil', $usuarioCheck->grupo);
                $this->session->set('email', $usuarioCheck->email);
                return redirect()->to('/');
            }

        }
        return view('login', $data);
    }
}
