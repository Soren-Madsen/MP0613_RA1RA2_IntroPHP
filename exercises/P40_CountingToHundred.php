<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int) $input;
        
        for ($i = $number; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}
