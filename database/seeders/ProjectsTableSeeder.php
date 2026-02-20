<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    public function run(): void
    {

        $projects = [
            [
                'name' => 'SiliconStock',
                'languages' => 'js',
                'technology' => [2, 3, 4],
                'category' => 'E-commerce',
                'img' => 'resources/img/SiliconStock.png',
                'description' => 'SiliconStock is a simulation of an e-commerce of pc components witch features 
                    a working chatbot that can answer about products, a persistent cart, e-mail sending and stripe 
                    payment system.',
                'descrizione' => "SiliconStock è una simulazione di un e-commerce di componenti per PC che presenta
                    un chatbot funzionante in grado di rispondere a domande sui prodotti, un carrello persistente,
                    l'invio di e-mail e un sistema di pagamento Stripe."
            ],
            [
                'name' => 'Boolflix',
                'languages' => 'js',
                'technology' => [2, 4],
                'category' => 'Streaming',
                'img' => 'resources/img/Boolflix.png',
                'description' => 'A site that gives info about film and series, inspired to netflix style, you can 
                    filter by type ( TV series or film) and by genre; you can also search by name and combine filters.',
                'descrizione' => "Un sito che fornisce informazioni su film e serie, ispirato allo stile Netflix,
                    consente di filtrare per tipologia (serie TV o film) e per genere; si può anche cercare per nome e combinare
                    i filtri.",
            ],
            [
                'name' => 'Bandcamp',
                'languages' => '',
                'technology' => [4],
                'category' => 'Music',
                'img' => 'resources/img/Bandcamp.png',
                'description' => 'A plain html and css remake of the official bandcamp site.',
                'descrizione' => 'Un semplice remake in HTML e CSS del sito ufficiale di Bandcamp',
            ]
        ];



        foreach ($projects as $project) {

            $newProject = new Project();

            $newProject->name = $project['name'];
            $newProject->languages = $project['languages'];
            // $newProject->framework = $project['framework'];
            $newProject->category = $project['category'];
            $newProject->img = $project['img'];
            $newProject->description = $project['description'];
            $newProject->descrizione = $project['descrizione'];


            $newProject->save();

            $newProject->technologies()->attach($project['technology']);
        }
    }
}
