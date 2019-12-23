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
    //   DB::table('clients')->insert([
    //       'name' => 'a_band',
    //       'pic' => 'a_band.jpg',
    //       'url' => 'http://www.a_band.com/',
    //   ]);

      DB::table('users')->insert([
        'name' => 'frigginglorious',
        'email' => 'frigginglorious'.'@gmail.com',
        'password' => bcrypt('changeMe'),
      ]);
  }
}
