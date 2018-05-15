<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'The Ventures',
            'pic' => 'TheVentures.jpg',
            'url' => 'https://www.theventures.com/',
        ]);
        DB::table('clients')->insert([
            'name' => 'Georgia Bleu',
            'pic' => 'georgia.jpg',
            'url' => 'http://www.georgianapolitano.com/',
        ]);
        DB::table('clients')->insert([
            'name' => 'The Cuckoos',
            'pic' => 'cuckoos.jpg',
            'url' => 'http://www.thecuckoosaustin.com/',
        ]);
    }
}
