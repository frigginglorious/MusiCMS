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
      DB::table('gears')->insert([
          'type_id' => '1',
          'name' => 'Live Room',
          'short_description' => '23x32-15 Foot Vaulted Ceiling',
      ]);
      DB::table('users')->insert([
        'name' => 'frigginglorious',
        'email' => 'frigginglorious'.'@gmail.com',
        'password' => bcrypt('changeMe'),
      ]);
      DB::table('types')->insert([
          'name' => 'Studio',
      ]);
      DB::table('types')->insert([
          'name' => 'Mics',
      ]);
      DB::table('types')->insert([
          'name' => 'Pre Amps',
      ]);
      DB::table('types')->insert([
          'name' => 'Compressors',
      ]);
      DB::table('types')->insert([
          'name' => 'EQs',
      ]);
      DB::table('types')->insert([
          'name' => 'Monitoring',
      ]);
      DB::table('types')->insert([
          'name' => 'Artist Monitor Systems',
      ]);
      DB::table('types')->insert([
          'name' => 'Conversion',
      ]);
      DB::table('types')->insert([
          'name' => 'Software',
      ]);
      DB::table('types')->insert([
          'name' => 'Computers',
      ]);
      DB::table('types')->insert([
          'name' => 'Guitar Amps',
      ]);
      DB::table('types')->insert([
          'name' => 'Bass Amps',
      ]);
      DB::table('types')->insert([
          'name' => 'Guitars',
      ]);
      DB::table('types')->insert([
          'name' => 'Keyboards',
      ]);
      DB::table('types')->insert([
          'name' => 'Drums',
      ]);
      DB::table('types')->insert([
          'name' => 'Guitar FX Pedals',
      ]);
      DB::table('types')->insert([
          'name' => 'Miscellaneous',
      ]);
      DB::table('types')->insert([
          'name' => 'DI Boxes',
      ]);
      DB::table('types')->insert([
          'name' => 'Cables',
      ]);
  }
}
