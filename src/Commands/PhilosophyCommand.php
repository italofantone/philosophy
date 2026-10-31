<?php

namespace Italofantone\Philosophy\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Italofantone\Philosophy\Philosophy;

#[Signature('philosophy')]
#[Description('Display a random philosophical quote')]
class PhilosophyCommand extends Command
{
    public function handle(): int
    {
        $quote = Philosophy::quote();
        
        $this->info($quote);

        return Command::SUCCESS;
    }
}