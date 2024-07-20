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
        for ($i=0; $i < 20; $i++) { 
            
            $project= new Project();
            //salvo i dati in tabella
            $project->title=$faker->sentence();
            $project->content=$faker->text();
            $project->slug=Str::of($project->title)->slug('-');
    
    
            
            $project->save();
        }
    }
}
