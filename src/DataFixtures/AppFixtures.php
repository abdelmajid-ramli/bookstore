<?php

namespace App\DataFixtures;

use Faker\Factory;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fake = Factory::create();

        for($i=0;$i<20;$i++){
            
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
