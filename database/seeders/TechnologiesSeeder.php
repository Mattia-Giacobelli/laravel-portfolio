<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $technologies = [
            'Laravel',
            'React',
            'Express',
            'Bootstrap'
        ];


        foreach ($technologies as $tech) {

            $newTech = new Technology();

            $newTech->name = $tech;

            $newTech->save();
        }
    }
}
