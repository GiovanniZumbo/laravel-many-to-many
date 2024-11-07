<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologyNames = [
            "HTML",
            "CSS",
            "Javascript",
            "Vue",
            "PHP"
        ];


        foreach ($technologyNames as $name) {
            $newTechnology = new Technology();
            $newTechnology->name = $name;
            $newTechnology->color = $faker->unique()->hexColor();
            $newTechnology->save();
        }
    }
}
