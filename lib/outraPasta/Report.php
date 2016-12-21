<?php
namespace SolidPrinciples;

class Report
{
    public function body()
    {
        return [
            'a' => 'Anna',
            'b' => 'Bob',
            'c' => 'Chris',
        ];
    }

    public function print()
    {
        return json_encode($body);
    }
}
