<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        # Default Admin
        ->create([
            'name' => 'Admin',
            'email' => 'fakeadmin@gmail.com',
            'role_id' => 1, //corresponds to Admin role
            'password' => '$2y$10$8h53Xk0Q3NaGbKrGE24MRepuoN8MY3Mpr6SX4x0a94lfpc/TFKHK6' //password is bluefish
        ])

        # Editor
        ->create([
            'name' => 'Xord Kraithus',
            'email' => 'fakeeditor@gmail.com',
            'role_id' => 2, //corresponds to Editor role
            'password' => '$2y$10$8h53Xk0Q3NaGbKrGE24MRepuoN8MY3Mpr6SX4x0a94lfpc/TFKHK6' //password is bluefish    
        ]);
    }
}
