<?php
namespace SolidPrinciples;

class JSONFormatter
{
    public function format($body)
    {
        return json_encode($body) . "\n";
    }
}
