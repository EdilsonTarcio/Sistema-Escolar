<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use Exception;
class Aluno extends BaseController
{
    public function index()
    {
        echo '<h1> Index de usuario</h1>';
    }
    
    public function cadastrar()
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
        }else{
            return view('aluno/cadastro');
        }
        return view('aluno/cadastro', $data);
                
    }
    
    public function show($id)
    {
        echo '<h1> show de usuario</h1>'.$id;
    }
    
    public function update($id)
    {
        echo '<h1> update de usuario</h1>'.$id;
    }
    
    public function delete($id)
    {
        echo '<h1> delete de usuario</h1>'.$id;
    }

}
