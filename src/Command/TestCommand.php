<?php

namespace App\Command;

use App\Service\SRP\AreaCalculator as SRPAreaCalculator;
use App\Service\SRP\AreaCalculatorOutputter;
use App\Service\SRP\Circle as SRPCircle;
use App\Service\SRP\Square as SRPSquare;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'TestCommand',
    description: 'Add a short description for your command',
)]
class TestCommand extends Command
{
    public function __construct(){
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $forSRP1 = $this->forSRP1();

        $io->success($forSRP1);

        $forSRP2 = $this->forSRP2();

        $io->success($forSRP2);

        return Command::SUCCESS;
    }

    private function forSRP1(): string
    {
        $shapes = [
            new SRPSquare(15.55),
            new SRPCircle(5.45),
            new SRPCircle(1.55),
            new SRPSquare(10.95),
        ];

        $srpAreaCalculator = new SRPAreaCalculator($shapes);

        return $srpAreaCalculator->printTotalArea();
    }

    private function forSRP2(): string
    {
        $shapes = [
            new SRPSquare(15.55),
            new SRPCircle(5.45),
            new SRPCircle(1.55),
            new SRPSquare(10.95),
        ];

        $srpAreaCalculator = new SRPAreaCalculator($shapes);

        $areaCalculatorOutputter = new AreaCalculatorOutputter($srpAreaCalculator);

        return $areaCalculatorOutputter->toJSON();
    }
}
