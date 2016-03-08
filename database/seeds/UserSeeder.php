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
		        'name' => 'git@mcclainconcepts.com',
		        'email' => 'git@mcclainconcepts.com',
		        'password' => bcrypt('LaravelTestPW'),
		    ],
		    [
		        'name' => 'your@emailaddress.com',
		        'email' => 'your@emailaddress.com',
		        'password' => bcrypt('LaravelTestPW'),
		    ]
		]);
    }
}
