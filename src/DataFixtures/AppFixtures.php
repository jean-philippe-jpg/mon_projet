<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $marque1 = new Marque();
         $marque1 ->setLibelle('mercedes');
         $manager->persist($marque1);

         $marque2 = new Marque();
         $marque2 ->setLibelle('porshe');
         $manager->persist($marque2);

         $marque3 = new Marque();
         $marque3 ->setLibelle('volkswagen');
         $manager->persist($marque3);

         $manager->flush();
    }
}
