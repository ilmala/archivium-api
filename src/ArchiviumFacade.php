<?php

namespace Ilmala\Archivium;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ilmala\Archivium\Archivium
 */
class ArchiviumFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'archivium-api';
    }
}
