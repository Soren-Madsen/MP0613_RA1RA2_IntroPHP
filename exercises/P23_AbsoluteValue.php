<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int)$input;
        if ($number < 0) {
            echo "$number" * -1 . "\n";
        } else {
            echo "$number" . "\n";
        }
    }
}
