<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homework;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Homework::factory()->count(10)->create();
    }
}
