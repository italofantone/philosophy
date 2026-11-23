<?php

namespace Italofantone\Philosophy\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Italofantone\Philosophy\Philosophy;

#[Signature('philosophy {--lang= : The language locale (e.g., en, es)}')]
#[Description('Display a random philosophical quote')]
class PhilosophyCommand extends Command
{
    public function handle(): int
    {
        $quote = Philosophy::quote($this->option('lang'));
        
        $this->info($quote);

        return Command::SUCCESS;
    }
}