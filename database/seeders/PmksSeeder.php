<?php

namespace Database\Seeders;

use App\Models\Pmks\LanjutUsiaTerlantar;
use App\Models\Pmks\Pmks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PmksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pmks::factory()->count(5)->create();
        Pmks::factory()->count(5)->LanjutUsiaTerlantar()->create();
    }
}
