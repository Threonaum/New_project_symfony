<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Service\PriceEstimate;
use App\Entity\User;

class AppFixtures extends Fixture

{
    public function __construct(private PriceEstimate $priceEstimate){

    }
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin
        ->setEmail('buyjupiter@gmail.com')
        ->setPassword('12345')
        ->setLogin('lucas')
        ->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);
    
        
        $userRegular = new User();
        $userRegular
        ->setEmail('meijuan@gmail.com')
        ->setPassword('12345')
        ->setLogin('meijuan');
        $manager->persist($userRegular);


        $manager->flush();
    }
}
