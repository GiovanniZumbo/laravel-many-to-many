<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeNames = [
            "Front-end",
            "Back-end",
            "Full-stack",
            "Database",
            "Other"
        ];

        foreach ($typeNames as $name) {
            $newType = new Type();
            $newType->name = $name;
            $newType->save();
        }
    }
}
