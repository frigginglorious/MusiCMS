<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Head Engineer',
            'icon' => 'fa fa-wrench',
        ]);
        DB::table('roles')->insert([
            'name' => 'Owner',
            'icon' => 'fa fa-street-view',
        ]);
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
            'icon' => 'fa fa-bolt',
        ]);
        DB::table('roles')->insert([
            'name' => 'Writer',
            'icon' => 'fa fa-pencil-square-o',
        ]);
        DB::table('roles')->insert([
            'name' => 'Guitar',
            'icon' => 'fa fa-music',
        ]);
        DB::table('roles')->insert([
            'name' => 'Vocals',
            'icon' => 'fa fa-deaf',
        ]);
    }
}
