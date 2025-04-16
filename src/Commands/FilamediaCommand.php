<?php

namespace Haugen86\Filamedia\Commands;

use Illuminate\Console\Command;

class FilamediaCommand extends Command
{
    public $signature = 'filamedia';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
