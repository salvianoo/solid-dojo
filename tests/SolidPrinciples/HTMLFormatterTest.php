<?php

use SolidPrinciples\HTMLFormatter;

class HTMLFormatterTest extends PHPUnit_Framework_TestCase
{
    public function testIfFormatMethodExists()
    {
        $this->assertTrue(method_exists(new HTMLFormatter, 'format'), 'HTMLFormatter class does not have method format');
    }
}
