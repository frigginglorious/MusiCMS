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
    //   DB::table('clients')->insert([
    //       'name' => 'a_band',
    //       'pic' => 'a_band.jpg',
    //       'url' => 'http://www.a_band.com/',
    //   ]);
      DB::table('roles')->insert([
          'name' => 'Engineer',
          'icon' => 'fa fa-wrench',
      ]);
      DB::table('roles')->insert([
          'name' => 'Mixing',
          'icon' => 'fa fa-headphones',
      ]);
      DB::table('roles')->insert([
          'name' => 'Mastering',
          'icon' => 'fa fa-diamond',
      ]);
      DB::table('roles')->insert([
          'name' => 'Producer',
          'icon' => 'fa fa-product-hunt',
      ]);
      DB::table('roles')->insert([
          'name' => 'Score',
          'icon' => 'fa fa-music',
      ]);
      DB::table('roles')->insert([
          'name' => 'ADR',
          'icon' => 'fa fa-video-camera',
      ]);
      DB::table('roles')->insert([
          'name' => 'Sound',
          'icon' => 'fa fa-music',
      ]);
      DB::table('roles')->insert([
          'name' => 'FOH',
          'icon' => 'fa fa-home',
      ]);
      DB::table('roles')->insert([
          'name' => 'Writer',
          'icon' => 'fa fa-pencil-square-o',
      ]);
      DB::table('roles')->insert([
          'name' => 'Musician',
          'icon' => 'fa fa-microphone',
      ]);
      DB::table('clientRoles')->insert([
          'client_id' => '1',
          'role_id' => '1',
      ]);

      DB::table('users')->insert([
        'name' => 'frigginglorious',
        'email' => 'frigginglorious'.'@gmail.com',
        'password' => bcrypt('changeMe'),
      ]);
      
      foreach (collect(explode(',', env('DATA_TYPES'))) as $type){
        
        DB::table('types')->insert([
          'name' => $type,
        ]);
      }
      DB::table('gears')->insert([
          'type_id' => '1',
          'name' => 'Live Room',
          'short_description' => '23x32-15 Foot Vaulted Ceiling',
      ]);

  }
}
