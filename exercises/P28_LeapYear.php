<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year: ";
        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        $year = (int)$input;
        if ($year % 4 === 0 && $year % 100 !== 0 || ($year % 400 === 0)) {
            echo "The year is a leap year.";
        } else {
            echo "The year is not a leap year.";        
        }
    }
}
