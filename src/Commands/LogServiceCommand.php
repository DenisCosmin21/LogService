<?php

namespace Deniscosmin21\LogService\Commands;

use Illuminate\Console\Command;

class LogServiceCommand extends Command
{
    public $signature = 'logservice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
