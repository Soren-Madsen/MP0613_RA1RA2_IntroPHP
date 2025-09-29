<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        $count = 0;
        $avg = 0;
        $sum = 0;

        while (true) {
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int) $input;

            if ($number === 0) {

                break;
            }

            $count++;
            $sum += $number;
            $avg = $sum / $count;
        }
                 echo "Average of the numbers: $avg\n";

    }
}
