<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            'name' => 'Google',
            'address' => '50 rue de la Liberté 59000 Lille',
            'phone' => '03 00 00 00 00',
            'latitude' => 50.6333,
            'longitude' => 3.0667
        ]);
        DB::table('company')->insert([
            'name' => 'Charlie-Solutions',
            'address' => '120 avenue nationale 75000 Paris',
            'phone' => '06 00 00 00 00',
            'latitude' => 50.65,
            'longitude' => 2.9833
        ]);
        DB::table('company')->insert([
            'name' => 'Amazon',
            'address' => '1 impasse de l\'Arche 59800 Lille',
            'phone' => '09 00 00 00 00',
            'latitude' => 50.65,
            'longitude' => 3.0333
        ]);


        DB::table('employee')->insert([
            'name' => 'Dupont',
            'firstname' => 'Michel',
            'address' => '5 rue Vauban 59000 Lille',
            'phone' => '01 00 00 00 00',
            'idCompany' => 1
        ]);
        DB::table('employee')->insert([
            'name' => 'Debolo',
            'firstname' => 'Aurélien',
            'address' => '8 rue Jeanne d\'Arc 59000 Lille',
            'phone' => '05 00 00 00 00',
            'idCompany' => 2
        ]);
        DB::table('employee')->insert([
            'name' => 'Laporte',
            'firstname' => 'Sophie',
            'address' => '455 rue de Paris 59000 Lille',
            'phone' => '08 00 00 00 00',
            'idCompany' => 1
        ]);


        DB::table('gmaps_geocache')->insert([
            'address' => 'Air Canada Centre, Toronto',
            'latitude' => '43.6434661',
            'longitude' => '-79.3790989'
        ]);
    }
}
