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
                'framework' => 'React, Express',
                'category' => 'E-commerce',
                'img' => 'SiliconStock.png',
                'description' => 'SiliconStock is a simulation of an e-commerce of pc components witch features 
                    a working chatbot that can answer about products, a persistent cart, e-mail sending and stripe 
                    payment system.',
                'descrizione' => "SiliconStock è una simulazione di un e-commerce di componenti per PC che presenta
                    un chatbot funzionante in grado di rispondere a domande sui prodotti, un carrello persistente,
                    l'invio di e-mail e un sistema di pagamento Stripe.",
                'front_end' => true,
                'back_end' => true,

            ],
            [
                'name' => 'Boolflix',
                'languages' => 'js',
                'framework' => 'React',
                'category' => 'Streaming',
                'img' => 'Boolflix.png',
                'description' => 'A site that gives info about film and series, inspired to netflix style, you can 
                    filter by type ( TV series or film) and by genre; you can also search by name and combine filters.',
                'descrizione' => "Un sito che fornisce informazioni su film e serie, ispirato allo stile Netflix,
                    consente di filtrare per tipologia (serie TV o film) e per genere; si può anche cercare per nome e combinare
                    i filtri.",
                'front_end' => true,
                'back_end' => false,
            ],
            [
                'name' => 'Bandcamp',
                'languages' => '',
                'framework' => '',
                'category' => 'Music',
                'img' => 'Bandcamp.png',
                'description' => 'A plain html and css remake of the official bandcamp site.',
                'descrizione' => 'Un semplice remake in HTML e CSS del sito ufficiale di Bandcamp',
                'front_end' => true,
                'back_end' => false,
            ]
        ];



        foreach ($projects as $project) {

            $newProject = new Project();

            $newProject->name = $project['name'];
            $newProject->languages = $project['languages'];
            $newProject->framework = $project['framework'];
            $newProject->category = $project['category'];
            $newProject->img = $project['img'];
            $newProject->description = $project['description'];
            $newProject->descrizione = $project['descrizione'];
            $newProject->front_end = $project['front_end'];
            $newProject->back_end = $project['back_end'];

            $newProject->save();
        }
    }
}
