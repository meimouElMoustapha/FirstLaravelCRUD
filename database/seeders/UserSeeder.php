<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash; 



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
            'name'=>'mustapha1 sidi',
            'email'=>'mustapha125@gmail.com',
            'password'=>Hash::make('15623456')
        ]);
    }
}
