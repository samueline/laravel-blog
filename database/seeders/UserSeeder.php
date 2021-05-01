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
            'name'=>'Samuel David Reyes',
            'email'=>'samueld.reyesm@gmail.com',
            'password'=>'Samuel246531'
        ]);
        User::factory(99)->create();
    }
}
