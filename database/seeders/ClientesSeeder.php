<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{

    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Victor Padovam',
                'email' => 'desenvolvimento@ramartecnologia.com.br',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'jardim x',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Teste Padovam',
                'email' => 'desenvolvimento@ramartecnologia.com.br',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'jardim x',
            ]
        );
    }
}
