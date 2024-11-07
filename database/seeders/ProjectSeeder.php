<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = [
            [
                'title' => "Discord Homepage",
                'description' => "Self-made Discord Homepage layout, using only HTML/CSS. ",
                'image_url' => "https://graphicsprings.com/wp-content/uploads/2023/08/image-29.png",
                'git_url' => "-Wip-",
            ],
            [
                'title' => "SpotifyWeb",
                'description' => "Reproduction of one of the most-popular music streaming apps.",
                'image_url' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW4tupAVnrL2zBy-uozePnoKQGU4wq_1P5iw&s",
                'git_url' => "-Wip-",
            ],
            [
                'title' => "Boolzapp",
                'description' => "Reproduction of the famous WhatsApp web application ",
                'image_url' => "https://t4.ftcdn.net/jpg/08/56/22/15/360_F_856221557_jC5hbBUGj27sEeJF7yn8scBle24WvEMo.jpg",
                'git_url' => "-Wip-",
            ],
            [
                'title' => "Yu-Gi-Oh database",
                'description' => "Database of all the cards from the card-game 'Yu-Gi-Oh!' ",
                'image_url' => "https://assetsio.gnwcdn.com/yu-gi-oh-tcg-yugi-art.png?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp",
                'git_url' => "-Wip-",
            ],
        ];

        $types_id = Type::all()->pluck("id");

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project["title"];
            $newProject->type_id = $faker->RandomElement($types_id);
            $newProject->description = $project["description"];
            $newProject->image_url = $project["image_url"];
            $newProject->git_url = $project["git_url"];
            $newProject->save();
        }
    }
}
