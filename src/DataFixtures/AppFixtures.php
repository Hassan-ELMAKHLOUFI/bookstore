<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use App\Entity\Genre;
use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker=Faker\Factory::create();
        for ($i=1;$i<=20;$i++){
            $auteur = new Auteur();
            $auteur->setNomPrenom($faker->name);
            $auteur->setSexe(array_rand(array("M","F")));
            $auteur->setDateDeNaissance($faker->dateTimeBetween($startDate = '1900-01-01', $endDate = '2021-01-01', $timezone = null));
            $auteur->setNationalite($faker->countryCode);
            $this->addReference('auteur_'.$i,$auteur);

            $manager->persist($auteur);
        }

        $genres = [
            1=>[
                "nom" => "Action and Adventure."
            ],
            2=>[
                "nom" => "Classics"
            ],
            3=>[
                "nom" => "Comic Book or Graphic Novel"
            ],
            4=>[
                "nom" => "Detective and Mystery"
            ],
            5=>[
                "nom" => "Fantasy"
            ],
            6=>[
                "nom" => "Historical Fiction"
            ],
            7=>[
                "nom" => "Literary Fiction"
            ],
            8=>[
                "nom" => "Horror."
            ]
        ];

        foreach($genres as $key => $value){
            $genre = new Genre();
            $genre->setNom($value['nom']);
            $this->addReference('genre_'.$key,$genre);
            $manager->persist($genre);
        }



            $faker=Faker\Factory::create();
            for($i=1 ; $i<=50 ; $i++){
                $book= new Livre();
                for($j=1;$j<=$faker->numberBetween(1,2);$j++){
                    $book->addAuteur($this->getReference('auteur_'.$faker->numberBetween(1,20)));
                }
                for($j=1;$j<=$faker->numberBetween(1,2);$j++){
                    $book->addGenre($this->getReference('genre_'.$faker->numberBetween(1,7)));
                }
                $book->setIsbn($faker->isbn13);
                $book->setTitre($faker->realText(25));
                $book->setDateDeParution($faker->dateTimeBetween($startDate = '1900-01-01', $endDate = '2021-01-01', $timezone = null));
                $book->setNombrePages($faker->numberBetween($min = 3,$max=1000));
                $book->setNote($faker->numberBetween($min = 0,$max=20));

                $manager->persist($book);
            }
            // $product = new Product();
            // $manager->persist($product);

            $manager->flush();

    }
}
