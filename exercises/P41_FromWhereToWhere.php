<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        echo "Where to?\n";
        $input1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $to = (int) $input1;
        
        echo "Where from?\n";
        $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $from = (int) $input2;
        
        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n";
        }
    }
}