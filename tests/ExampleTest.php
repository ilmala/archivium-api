<?php

namespace Ilmala\Archivium\Tests;

use Ilmala\Archivium\Archivium;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $subject = Archivium::enterprises()->view('1RQS0');
        dd($subject);
    }
}
