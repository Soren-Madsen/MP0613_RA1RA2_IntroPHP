<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";

        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:";

        $input2 = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if (strcmp($input, $input2) === 0) {
            echo "Same";
        } else {
            echo "Different";
        }
    }
}
