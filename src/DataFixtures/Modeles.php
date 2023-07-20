<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Modele;


class Modeles extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $modele = new Modele();
        $modele -> setModele('megane')
         -> setPrix(15000)
         -> setCirculation(2016)
         -> setKilometrage(85000)
         -> setImage('C:\Users\jphil\Downloads\classe c.jpg');
         $manager->persist($modele);
        
        $manager->flush();
    }


    
}
