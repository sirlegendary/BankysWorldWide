<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $users = factory(App\User::class, 3)->create();

        $customer = factory(App\Customer::class, 30)->create();
    }
}
