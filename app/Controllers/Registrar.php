<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Registrar extends BaseController
{
    public function index()
    {
        $data['msg'] = '';
        if($this->request->getMethod() === 'post'){
            $usuarioModel = model("UsuarioModel");
            try{
                $usuarioData = $this->request->getPost();
                $usuarioData['ativo'] = 1;
                if($usuarioModel->save($usuarioData)){
                    $data['msg'] = 'Usuario Criado com Sucesso';
                }else{
                    $data['msg']    = 'Erro ao criar usuario';
                    $data['errors'] = $usuarioModel->errors(); 
                }

            }catch(Exception $e){
                $data['msg']    = 'Erro ao criar usuario' . $e->getMessage();
            }
        }
        return view('registrar', $data);
    }
}
