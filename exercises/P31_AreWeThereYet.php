<?php


class P31_AreWeThereYet
{
    public function main(): void
    {
        while (true) {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int) $input;
            
            if ($number === 4) {
                break;
            }
        }
    }
}