<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        Task::create([
            'title' => 'My 1st task',
            'description' => 'desc desc desc',
            'due_date' => '2024-08-20 00:00:01',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
