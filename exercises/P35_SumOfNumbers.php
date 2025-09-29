<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        $sum = 0;
        
        while (true) {
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int) $input;
            
            if ($number === 0) {
                break;
            }
            
            $sum += $number;
        }
        
        echo "Sum of the numbers: " . $sum . "\n";
    }
}