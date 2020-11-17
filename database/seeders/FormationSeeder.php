<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker=Faker::create();
        DB::table('Formations')->insert(
            [
                [
                    'nom'=>'Coding School',
                    'description'=>$Faker->text,
                ],
                [
                    'nom'=>'Amazon',
                    'description'=>$Faker->text,
                ],
                [
                    'nom'=>'Marketing',
                    'description'=>$Faker->text,
                ],
                [
                    'nom'=>'WordPress',
                    'description'=>$Faker->text,
                ],
                [
                    'nom'=>'MasterSchool',
                    'description'=>$Faker->text,
                ],
                [
                    'nom'=>'Adobe',
                    'description'=>$Faker->text,
                ],
                
            ],
        );
    }
}
