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
            'name' => 'userw',
            'email' => 'userw@userw.com',
            'password' => bcrypt(12345678),
        ]);

        User::create([
            'name' => 'usere',
            'email' => 'usere@usere.com',
            'password' => bcrypt(12345678),
        ]);

        User::create([
            'name' => 'userp',
            'email' => 'userp@userp.com',
            'password' => bcrypt(12345678),
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt(12345678),
        ]);

    }
}
