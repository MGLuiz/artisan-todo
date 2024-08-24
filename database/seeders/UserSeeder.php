<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //
        User::create([
            'name' => 'Marcelo Boulos',
            'email' => 'marcelo@gmal.com',
            'password' => '11223344'
        ]);
    }
}
