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
        $users = [
            [
                'name' => 'Samuel Kinuthia',
                'email' => 'skinuthia77@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('loremipsum'),
            ]

        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
