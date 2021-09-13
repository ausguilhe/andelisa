<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\ProdutoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaSeeder::class,
            ProdutoSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
