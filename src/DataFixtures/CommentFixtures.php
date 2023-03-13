<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Trick;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // We load the JSON file
        $json = file_get_contents('./assets/data/dataset.json');
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $data = $serializer->decode($json, 'json');

        // We create the comments based on the comments in the JSON file and attribute a random Trick from the array of Tricks and random User from the Users array
        foreach ($data['comments'] as $comment) {
            $newComment = new Comment();
            $newComment->setComment($comment['comment'])
                ->setCreatedAt(new \DateTimeImmutable())
                ->setTrick($manager->getRepository(Trick::class)->findOneBy(['name' => (TrickFixtures::TRICKS_NAME[rand(0, 14)])]))
                ->setUser($manager->getRepository(User::class)->findOneBy(['username' => (UserFixtures::USERS[rand(0, 3)])]));

            $manager->persist($newComment);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TrickFixtures::class,
        ];
    }
}
