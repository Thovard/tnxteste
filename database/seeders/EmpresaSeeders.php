<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'TecnoVix',
            `categoria` => 'Tecnologia',
            'Telefone' => '2799999-9999',
            'password' => bcrypt('12345678'),
        ]);
    }
}