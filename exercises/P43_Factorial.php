<?php

class P43_Factorial
{
   public function main(): void
    {
        echo "Give a number: \n";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int) $input;
        
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        
        echo "Factorial: " . $factorial . "\n";
    }
}
