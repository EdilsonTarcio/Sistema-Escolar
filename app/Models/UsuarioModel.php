<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'usuario',
        'senha',
        'email',
        'grupo',
        'ativo'
    ]; 

    // Validation
    protected $validationRules      = [
        'nome'    => 'required',
        'usuario' => 'required',
        'senha'   => 'required',
        'grupo'   => 'required',
        'ativo'   => 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hasSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    //funções
    protected function hasSenha($data){
        #$data->senha = password_hash($data->senha, PASSWORD_DEFAULT);
        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        return $data;
    } 

    public function check($usuario, $senha){
        //busca o usuario
        $buscaUsuario = $this->where('usuario', $usuario)->first();
        if(is_null($buscaUsuario)){
            return false;
        }
        //validar senha
        if(! password_verify($senha, $buscaUsuario->senha)){
            return false;
        }
        // se passar pelas duas validações ratorna o usuario
        return $buscaUsuario;
    }
}
