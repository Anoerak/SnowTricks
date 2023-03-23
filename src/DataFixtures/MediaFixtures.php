<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Media;
use App\Entity\Trick;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MediaFixtures extends Fixture implements DependentFixtureInterface
{
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
			| We create the medias based on the medias in the JSON file and attribute a random trick from the array of tricks
			|-----------------------------------
		*/
        foreach ($data['medias'] as $media) {
            $newMedia = new Media();
            $newMedia->setPath($media['media'])
                ->setType($media['type'])
                ->setTrick($manager->getRepository(Trick::class)->findOneBy(['name' => $media['trick_name']]));

            $manager->persist($newMedia);
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
