<?php

use SolidPrinciples\JSONFormatter;

class JSONFormatterTest extends PHPUnit_Framework_TestCase
{
    public function testIfFormatMethodExists()
    {
        $this->assertTrue(method_exists(new JSONFormatter, 'format'), 'JSONFormatter class does not have method format');
    }
}
