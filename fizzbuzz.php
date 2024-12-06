<?php

function fizzBuzz($start = 1, $end = 100) {
    $results = [];
    
    for ($i = $start; $i <= $end; $i++) {
        $output = '';
        
        if ($i % 3 === 0) $output .= 'Fizz';
        if ($i % 5 === 0) $output .= 'Buzz';
        
        $results[] = $output ?: $i;
    }
    
    return $results;
}

// Example usage
$numbers = fizzBuzz();
foreach ($numbers as $number) {
    echo $number . "\n";
}
