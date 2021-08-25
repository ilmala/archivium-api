<?php

namespace Ilmala\Archivium;

use Ilmala\Archivium\Resources\Enterprise;

class Archivium
{
    public static function enterprises()
    {
        return new Enterprise();
    }
}
