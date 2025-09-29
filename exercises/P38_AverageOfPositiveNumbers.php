<?php

class P38_AverageOfPositiveNumbers
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
            
            if ($number > 0) {
                $count++;
                $sum += $number;
            }
        }
        
        if ($count === 0) {
            echo "Cannot calculate the average\n";
        } else {
            $average = $sum / $count;
            echo $average . "\n";
        }
    }
}
