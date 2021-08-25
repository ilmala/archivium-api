<?php

namespace Ilmala\Archivium\Commands;

use Illuminate\Console\Command;

class ArchiviumCommand extends Command
{
    public $signature = 'archivium-api';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
