<?php

class P39_Counting
{
    public function main(): void
    {
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int) $input;
        
        for ($i = 0; $i <= $number; $i++) {
            echo $i . "\n";
        }
    }
}
