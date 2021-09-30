<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'andreneves',
            'email' => 'andr@andr.com.br',
            'cell'=>'21927453869',
            'tel'=>'2184204840',
            'password' => Hash::make('123456'),
        ]);

    }
}
