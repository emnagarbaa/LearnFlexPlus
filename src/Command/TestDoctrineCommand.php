<?php

namespace App\Command;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:test-doctrine',
    description: 'Test Doctrine connection and fetch all users',
)]
class TestDoctrineCommand extends Command
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Fetch all users
        $users = $this->em->getRepository(Users::class)->findAll();

        if (!$users) {
            $io->warning('No users found in the database.');
            return Command::SUCCESS;
        }

        $io->success('Users found in the database:');

        foreach ($users as $user) {
            $io->writeln(sprintf(
                '[%d] %s %s | Email: %s | Role: %s',
                $user->getId(),
                $user->getNom(),
                $user->getPrenom(),
                $user->getEmail(),
                $user->getRole()
            ));
        }

        return Command::SUCCESS;
    }
}
