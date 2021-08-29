<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        for ($i=0; $i<10; $i++){
//            $user = new User();
//            $user->setEmail("test".$i."@testmail.com");
//            $user->setPassword("testpass".$i);
//            $manager->persist($user);
//        }
        $admin = new User();
        $admin->setEmail('admin@admin.com');
        $admin->setPassword('$2y$13$RC4EpVwnzD.gZQKkVCK3dOYetqifMu2v1bzRzSmd./nC28H86Uhvu');
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
