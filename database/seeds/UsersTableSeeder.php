<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->get()->count() == 0) {
            $users = [
                [
                    'user_name' => 'admin',
                    'email'     => 'admin@gmail.com',
                    'password'  => bcrypt('secret'),
                    'phone'     => '1234567891',
                    'address'   => '8888 Cummings Vista Apt. 101, Susanbury, NY 95473',
                    'role'      => '1',
                    'is_active' => '1',
                ],
                [
                    'user_name' => 'clients',
                    'email'     => 'clients@gmail.com',
                    'password'  => bcrypt('secret'),
                    'phone'     => '0999478779',
                    'address'   => '439 Karley Loaf Suite 897',
                    'role'      => '0',
                    'is_active' => '1',
                ]
            ];
            DB::table('users')->insert($users);
        }
    }
}
