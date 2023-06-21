<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create(
            [
            'nome' => 'Produto 1',
            'valor' => '10.00',
            ]
        );
        Produto::create(
            [
                'nome' => 'Produto 2',
                'valor' => '2.00',
            ]
        );
        Produto::create(
            [
                'nome' => 'Produto 3',
                'valor' => '15.00',
            ]
        );
        Produto::create(
            [
                'nome' => 'Produto 4',
                'valor' => '8.00',
            ]
        );
    }
}
