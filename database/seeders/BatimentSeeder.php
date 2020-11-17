<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker=Faker::create();
        DB::table('Batiments')->insert(
            [
                [
                    'nom'=>$Faker->name,
                    'description'=>$Faker->text,
                ]
                
            ],
        );
    }
}
