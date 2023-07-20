<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vehicule;

class AppFixtures extends Fixture 
    {

    public function load(ObjectManager $manager): void
    {
        
           
           $vehicule = new Vehicule();
            $vehicule -> setMarque('renault'); 
            $manager -> persist($vehicule);

           
           $manager->flush();

        }

    }
