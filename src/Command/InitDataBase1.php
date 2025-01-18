<?php

namespace App\Command;

use App\Service\LegalInformationsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:initdatabase1')]
class InitDataBase1 extends Command
{
    public function __construct(
        private LegalInformationsService $legalInformationService,
        )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        // ini_set('memory_limit', '2048M');
        ini_set("memory_limit", -1);

        $io = new SymfonyStyle($input,$output);

        $this->legalInformationService->creationLegalInformations($io);

        return Command::SUCCESS;
    }

}