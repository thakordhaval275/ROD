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
        if(!\App\User::where('email','admin@gmail.com')->exists())
        {
            \App\User::create([
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345'),
                'usertype'=>0,
                'securityque'=>'Test',
                'securityans'=>'Test',
            ]);
        }

    }
}
