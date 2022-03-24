<?php

namespace Database\Seeders;

use App\Models\User;
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
        
        User::create([
            'name' => 'Beto Ronceros',
            'email' => 'betorlsc@gmail.com',
            'password' => bcrypt('Tober0123')
        ]);
        
        User::factory(9)->create();

    }
}
