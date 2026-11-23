<?php

namespace Italofantone\Philosophy\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use InvalidArgumentException;

#[Signature('philosophy {--lang= : The language locale (e.g., en, es)}')]
#[Description('Display a random philosophical quote')]
class PhilosophyCommand extends Command
{
    public function handle(): int
    {
        try {
            $quote = philosophy()->quote($this->option('lang'));
        } catch (InvalidArgumentException $exception) {
            $this->error($exception->getMessage());

            return Command::FAILURE;
        }

        $this->info($quote);

        return Command::SUCCESS;
    }
}
