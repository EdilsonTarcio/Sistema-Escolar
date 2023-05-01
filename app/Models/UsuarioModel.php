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
        'nome'    => 'required|min_length[15]',
        'usuario' => 'required|valid_email|is_unique[users.usuario,id,{id}]',
        'senha'   => 'required|min_length[8]',
        'email'   => 'valid_email|is_unique[usuarios.email]',
        'grupo'   => 'required',
        'ativo'   => 'required'
    ];
    protected $validationMessages   = [
        'email' => [
            'is_unique' => 'Desculpe, esse e-mail já está em uso favor informar outro.',
        ],
        'nome' => [
            'required'      => 'Favor informe seu nome.',
            'min_length'    => 'Informe um nome maior',
        ],
        'usuario' => [
            'required'      => 'Favor informe seu usuario.',
            'valid_email'   => 'O e-mail desse usuario não corresponde com o cadastrado',
            'is_unique' => 'Desculpe, esse usuario já está em uso favor informar outro.',
        ],
    ];
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
