<?php
namespace SolidPrinciples;

class HTMLFormatter
{
    public function format($body)
    {
        $output_array = array_map(function($key) use ($body) {
            return "<{$key}>{$body[$key]}</{$key}>";
        }, array_keys($body));

        return implode($output_array) . "\n";
    }
}
