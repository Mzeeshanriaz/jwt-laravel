<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'Zeeshan',
            'email' => 'Zeeshan@email.com',
            'password' => \Hash::make('12345678')
        ]);
    }
}
