<?php

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
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
                'permission' => 0
            ],
            [
                'name' => 'xxxibqtaz',
                'email' => 'xxxibqtaz@gmail.com',
                'password' => bcrypt('xxxibqtaz'),
                'permission' => 0
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'permission' => 1
            ]
        ]);
    }
}
