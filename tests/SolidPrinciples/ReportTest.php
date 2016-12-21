<?php

use SolidPrinciples\Report;

use \Mockery as mockery;

class ReportTest extends PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        mockery::close();
    }

    public function testPrintMethod()
    {
        $report = new Report;

        $mock = mockery::mock('GeneralFormatter', 'SolidPrinciples\FormatterInterface');
        $mock->shouldReceive('format')->once();

        $report->print($mock);
    }
}
