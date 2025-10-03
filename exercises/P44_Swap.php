<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

        $input1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $index1 = (int) $input1;
        
        $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $index2 = (int) $input2;
        
        // Swap elements if indices are valid
        if (isset($array[$index1]) && isset($array[$index2])) {
            $temp = $array[$index1];
            $array[$index1] = $array[$index2];
            $array[$index2] = $temp;
        }
        
        echo "\n";
        
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}
