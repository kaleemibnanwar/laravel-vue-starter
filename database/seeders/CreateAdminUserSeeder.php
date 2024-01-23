<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::query()->updateOrCreate(['email' => 'superadmin@admins.com'],
            [
                'name' => 'SuperAdmin',
                'email' => 'superadmin@admins.com',
                'password' => bcrypt('12345678')
            ]
        );

        $user->assignRole('super-admin');
    }
}
