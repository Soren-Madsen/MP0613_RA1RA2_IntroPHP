<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        echo "Last number?\n";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int) $input;
        
        $sum = 0;
        for ($i = 1; $i <= $number; $i++) {
            $sum += $i;
        }
        
        echo "The sum is " . $sum . "\n";
    }
}
