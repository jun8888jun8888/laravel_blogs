<?php

use Illuminate\Database\Seeder;
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
        //
        factory(App\User::class, 50)->create();
        DB::table('users')->insert([
            'name' => 'test'.mt_rand(1, 9),
            'password' => bcrypt('secret'),
        ]);
    }
}
