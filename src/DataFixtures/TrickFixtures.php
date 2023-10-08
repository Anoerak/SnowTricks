<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Trick;
use App\Entity\User;
use Doctrine\Common\Annotations\Annotation\Enum;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class TrickFixtures extends Fixture implements DependentFixtureInterface
{
    public const TRICKS_NAME = array(
        '360',
        'Backflip',
        'Frontside 180',
        'Tail grab',
        'Nose Grab',
        'Method',
        'Cab 540',
        'Backside lipslide',
        'Frontside boardslide',
        'Backside 180',
        'Frontside 270 on',
        'Backside 270 on',
        'Frontside 540',
        'Frontside lipslide',
        'Frontside 360 shifty'
    );

    public function load(ObjectManager $manager): void
    {
        /*
			|-----------------------------------
			| We load the JSON file
			|-----------------------------------
		*/
        $json = file_get_contents('./assets/data/dataset.json');
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $data = $serializer->decode($json, 'json');

        /*
			|-----------------------------------
			| We create the tricks based on the tricks in the JSON file and attribute a random user from the array of users
			|-----------------------------------
		*/
        foreach ($data['tricks'] as $trick) {
            $newTrick = new Trick();
            $newTrick->setName($trick['name'])
                ->setDescription($trick['description'])
                ->setCategory($trick['category'])
                ->setMainPicture($trick['main_picture'])
                ->setCreatedAt(new \DateTimeImmutable())
                // ->setSlug($trick['slug'])
                ->setUser($manager->getRepository(User::class)->findOneBy(['username' => (UserFixtures::USERS[rand(0, 3)])]));

            $manager->persist($newTrick);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
