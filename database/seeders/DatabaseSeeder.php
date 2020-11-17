<?php

namespace Database\Seeders;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BatimentSeeder::class,
        ]);
        $this->call([
            FormationSeeder::class,
        ]);
        Eleve::factory()->count(50)->create();
    }
}
