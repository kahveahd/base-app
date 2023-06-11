<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(3)->create();

        User::factory()->create([
             'name' => 'Camilo Alberto',
             'email' => 'kahveahd@gmail.com',
        ]);

        User::factory()->unverified()->create();

        User::factory()->trashed()->create();

        User::factory()->state(["name"=>"Everald0"])->create();
    }
}
