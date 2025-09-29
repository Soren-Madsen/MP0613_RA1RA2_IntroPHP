<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        while (true) {
            echo "Carry on?\n";
            $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($input === "no") {
                break;
            }
            echo $input . "\n";
        }
    }
}
