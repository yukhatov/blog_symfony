<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 100; $i++) {
            $post = new Post();
            $post->setText(rand(1,100));
            $post->setTitle('Lorem Ipsum...');
            $manager->persist($post);
        }

        $manager->flush();
    }
}
