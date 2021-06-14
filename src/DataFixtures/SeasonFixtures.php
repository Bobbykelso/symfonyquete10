<?php


namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        //a remplir
    }

    public function getDependencies(): array
    {
        return [
            // a completer
            CategoryFixtures::class,
            ProgramFixtures::class
        ];
    }
}