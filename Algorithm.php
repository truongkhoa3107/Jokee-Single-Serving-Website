<?php
    // Main
    function miniMaxSum($arr) {
        sort($arr);
        
        $max_sum = array_sum(array_slice($arr, 1));
        
        $min_sum = array_sum(array_slice($arr, 0, -1));
        
        echo "Simple output \n" . $min_sum . " " . $max_sum . "\n";
    }

    // Bonus
    function countTotalOfArr($arr) {
        $total = array_sum($arr);

        echo "Total Of Array: " . $total . "\n";
    }

    function findMinInArr($arr) {
        sort($arr);

        echo "Min In Array: " . $arr[0] . "\n";
    }
    
    function findMaxInArr($arr) {
        sort($arr);

        echo "Max In Array: " . $arr[count($arr)] . "\n";
    }

    function findEvenElementsInArr($arr) {
        $arr_temp = [];
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] % 2 == 0) {
                array_push($arr_temp, $arr[$i]);
            }
        }

        return $arr_temp;
    }

    function findOddElementsInArr($arr) {
        $arr_temp = [];
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] % 2 != 0) {
                array_push($arr_temp, $arr[$i]);
            }
        }

        return $arr_temp;
    }

    // Main flow
    echo "Input format\n";
    echo "A single line of five space-separated intergrs. Ex: 1 2 3 4 5\n";
    echo "Simple input (You should follow Input format to see expected Output) \n";

    $input = trim(fgets(STDIN));
    $arr = array_map('intval', explode(' ', $input));

    miniMaxSum($arr);

    // Bonus flow
    // countTotalOfArr($arr);

    // findMinInArr($arr);

    // findMaxInArr($arr);

    // $even_elements = findEvenElementsInArr($arr);
    // echo "Even elements in array: " . implode(', ', $even_elements) . "\n";
    
    // $odd_elements = findOddElementsInArr($arr);
    // echo "Odd elements in array: " . implode(', ', $odd_elements) . "\n";
?>