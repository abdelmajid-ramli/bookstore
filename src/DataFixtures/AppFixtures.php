<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Genre;
use App\Entity\Livre;
use App\Entity\Auteur;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


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
