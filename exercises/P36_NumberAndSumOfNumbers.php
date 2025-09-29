<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        $count = 0;
        $sum = 0;
        
        while (true) {
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int) $input;
            
            if ($number === 0) {
                break;
            }
            
            $count++;
            $sum += $number;
        }
        
        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}