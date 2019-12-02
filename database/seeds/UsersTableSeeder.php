<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$W1W2Azr9BtqYC.V0cxTNn.d96OuDe4PN5UwrXVzmx70MfNCxMGcom',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
