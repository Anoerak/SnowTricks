<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\User;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{

    private $encoder;
    public const USERS = ['johndoe', 'janedoe', 'bobsmith', 'sarahlee'];

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

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
			| We create the users based on the users in the JSON file
			|-----------------------------------
		*/
        foreach ($data['users'] as $user) {
            $newUser = new User();
            $password = $this->encoder->hashPassword($newUser, $user['password']);
            $newUser->setUsername($user['username'])
                ->setEmail($user['email'])
                ->setPassword($password)
                ->setRoles($user['roles'])
                ->setProfilePicture($user['profile_picture'])
                ->setIsVerified(true)
                ->setCreatedAt(new \DateTimeImmutable());

            $manager->persist($newUser);
        }

        $manager->flush();
    }
}
