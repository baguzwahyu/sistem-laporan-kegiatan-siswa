<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'irgi fahrias',
            'email' => 'fahrias600@gmail.com',
            'admind' => 1,
            'password' =>bcrypt('irgi551')
        ]);

        \App\User::create([
            'name' => 'Arya Firman',
            'email' => 'arya@gmail.com',
            'admind' => 1,
            'password' =>bcrypt('qwerty23')
        ]);
    }
}
