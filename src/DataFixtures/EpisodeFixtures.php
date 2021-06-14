<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // à remplir

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            //a completer
            CategoryFixtures::class,
            ProgramFixtures::class
        ];
    }
}
