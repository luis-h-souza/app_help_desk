<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nome' => 'Admin',
                'senha' => bcrypt('123456'),
                'email' => 'admi@teste.com',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Luis',
                'senha' => bcrypt('123456'),
                'email' => 'luis@teste.com',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Usuário',
                'senha' => bcrypt('123456'),
                'email' => 'user@teste.com',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
