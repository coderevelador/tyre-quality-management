<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'support@pvalue.co.in',
                'is_admin' => '1',
                'status' => '1',
                'image' =>'Placeholder-user.png',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@pvalue.co.in',
                'is_admin' => '0',
                'status' => '1',
                'image' =>'Placeholder-user.png',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
