<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\V1\User::factory(10)->create();
        \App\Models\V1\Manufactory::factory(10)->create();
        \App\Models\V1\Category::factory(10)->create();
    }
}
