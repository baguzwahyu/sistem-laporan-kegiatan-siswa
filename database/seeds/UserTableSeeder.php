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
            'password' =>bcrypt('irgi551'),
            'group_id' => 2,
            'alamat'    => 'wonosari,peterongan,jombang',
            'photo' =>'img/user.png',
        ]);

        \App\User::create([
            'name' => 'Arya Firman',
            'email' => 'aryafirman40@gmail.com',
            'admind' => 1,
            'alamat'    => 'gedangan,sidoarjo',
            'password' =>bcrypt('qwerty23'),
            'group_id' => 5,
            'photo' =>'img/user.png',
        ]);

        \App\User::create([
            'name' => 'Firman',
            'email' => 'arya@gmail.com',
            'admind' => 0,
            'alamat'    => 'gedangan,sidoarjo',
            'password' =>bcrypt('qwerty23'),
            'group_id' => 4,
            'photo' =>'img/user.png',
        ]);
    }
}

