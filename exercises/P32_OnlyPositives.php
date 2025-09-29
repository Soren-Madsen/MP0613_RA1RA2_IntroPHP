<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        while (true) {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int) $input;
            
            if ($number === 0) {
                break;
            }
            
            if ($number < 0) {
                echo "Unsuitable number\n";
            } else {
                // Calculo del exponente
                echo ($number * $number) . "\n";
            }
        }
    }
}