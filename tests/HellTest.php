<?php

namespace xiang531039015\Test;

use PHPUnit\Framework\TestCase;

class HellTest extends TestCase
{
    public function setUp()
    {
        $loader = require __DIR__."/../vendor/autoload.php";
        $loader->add('xiang531039015\\Test\\', __DIR__);
    }
    public function testStringOut()
    {
        $this->expectOutputString('Go to hell, htx');
        $hell = new \xiang531039015\Hell('htx');
        $hell->out();
    }
}

