<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $userPasswordHasher,
        private UserRepository $userRepository,
        private Security $security
        ){
    }

    public function initAdminUser($io): void
    {
        $io->title('Création / mise à jour de l\'user ADMIN');

        //on vérifié si on a déjà créé l'admin
        $user = $this->userRepository->findOneBy(['email' => $_ENV['ADMIN_EMAIL']]);

        if(!$user){

            $user = new User();
        }

        $user->setEmail($_ENV['ADMIN_EMAIL'])
            ->setRoles(['ROLE_SUPER_ADMIN'])
            ->setPassword(
                $this->userPasswordHasher->hashPassword(
                        $user,
                        $_ENV['ADMIN_PASSWORD']
                    )
                );

        $this->em->persist($user);
        $this->em->flush();

        $io->success('Admin créé / mise à jour!');

    }

}