<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//aggiungo faker che è un generatore di testo
use Faker\Generator as Faker;
//metodo per comporre gli slug
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $project= new Project();
        //salvo i dati in tabella
        $project->title=$faker->sentence(10);
        $project->content=$faker->text(500);
        $project->slug=Str::of($project->title)->slug('-');


        
        $project->save();
    }
}
