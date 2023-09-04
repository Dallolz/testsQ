<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // some movies
        $movies = [
            [
                'title' => 'Pulp Fiction',
                'description' => "L’odyssée sanglante et burlesque de petits malfrats dans la jungle d’Hollywood : Deux petits tueurs, un dangereux gangster marié à une camée, un boxeur roublard, des prêteurs sur gages sadiques, un caïd élégant et dévoué, un dealer bon mari et deux tourtereaux à la gâchette facile.",
                'image' => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4TBdF7nFw2aKNM0gPOlDNq3v3se.jpg",
                'release' => "1994-10-26"
            ],
            [
                'title' => 'Matrix',
                'description' => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l’un des pirates les plus recherchés du cyber-espace. À cheval entre deux mondes, Neo est assailli par d’étranges songes et des messages cryptés provenant d’un certain Morpheus. Celui-ci l’exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu’est-ce que la Matrice ? Nul ne le sait, et aucun homme n’est encore parvenu à en percer les défenses. Mais Morpheus est persuadé que Neo est l’Élu, le libérateur mythique de l’humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...",
                'image' => "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pEoqbqtLc4CcwDUDqxmEDSWpWTZ.jpg",
                'release' => "1999-06-23"
            ],
            [
                'title' => 'Inception',
                'description' => "Dom Cobb est un voleur expérimenté, le meilleur dans l'art dangereux de l'extraction, voler les secrets les plus intimes enfouis au plus profond du subconscient durant une phase de rêve, lorsque l'esprit est le plus vulnérable. Les capacités de Cobb ont fait des envieux dans le monde tourmenté de l'espionnage industriel alors qu'il devient fugitif en perdant tout ce qu'il a un jour aimé. Une chance de se racheter lui est alors offerte. Une ultime mission grâce à laquelle il pourrait retrouver sa vie passée mais uniquement s'il parvient à accomplir l'impossible inception.",
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aej3LRUga5rhgkmRP6XMFw3ejbl.jpg',
                'release' => '2010-07-21'
            ],
            [
                'title' => 'Interstellar',
                'description' => "Dans un futur proche, face à une Terre exsangue, un groupe d’explorateurs utilise un vaisseau interstellaire pour franchir un trou de ver permettant de parcourir des distances jusque-là infranchissables. Leur but : trouver un nouveau foyer pour l’humanité.",
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1pnigkWWy8W032o9TKDneBa3eVK.jpg',
                'release' => '2014-07-21'
            ],
            [
                'title' => 'Mad Max : Fury Road',
                'description' => "Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt le désert à bord d’un véhicule militaire piloté par l’Impératrice Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s’est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement...",
                'image' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oLy2V6AWSEfdPgKOtrSGnwB3Q2R.jpg',
                'release' => '2015-05-14'
            ]
        ];

        // insert movies
        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'description' => $movie['description'],
                'image' => $movie['image'],
                'release' => $movie['release']
            ]);
        }
    }
}
