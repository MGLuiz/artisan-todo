<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        $this->call([
            // Com a Factory não precisamos do CategorySeeder::class
            // UserSeeder::class,
            // TaskSeeder::class,
        ]);

        User::factory(5)->create();
        Category::factory(10)->create();
        Task::factory(30)->create();
    }
}
