<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Sport');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Dev');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Culture G');
        $manager->persist($category3);

        $category1 = new Category();
        $category1->setName('Cinema');
        $manager->persist($category1);

        $manager->flush();
    }
}
