<?php
function miniMaxSum($arr) {
    sort($arr);
    
    $max_sum = array_sum(array_slice($arr, 1));
    
    $min_sum = array_sum(array_slice($arr, 0, -1));
    
    echo "Simple output \n" . $min_sum . " " . $max_sum;
}

echo "Input format\n";
echo "A single line of five space-separated intergrs. Ex: 1 2 3 4 5\n";
echo "Simple input (You should follow Input format to see expected Output) \n";

$input = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $input));

miniMaxSum($arr);
?>