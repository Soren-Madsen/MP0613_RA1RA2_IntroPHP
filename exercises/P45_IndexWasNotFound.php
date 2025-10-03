<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Read input from user
        $searchValue = (int)trim(fgets(STDIN));
        
        // Search for the value in the array
        $index = array_search($searchValue, $array, true);
        
        if ($index !== false) {
            echo "$searchValue is at index $index." . PHP_EOL;
        } else {
            echo "$searchValue was not found." . PHP_EOL;
        }
       
    }
}
