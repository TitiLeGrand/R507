<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Test extends WebTestCase
{
    public function testExemple(): void
    {
        $value = true;
        $this->assertTrue($value);
    }
}
