<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdmSeeder extends Seeder
{
    public function run()
    {
        $senha = password_hash('admin@', PASSWORD_DEFAULT);

        $data = [
            'nome'      => 'admin',
            'usuario'   => 'admin',
            'senha'     => $senha,
            'email'     => 'admin@admin.com.br',
            'grupo'     => 'admin',
            'ativo'     => '1'
        ];

        $this->db->table('users')->insert($data);
    }
}
