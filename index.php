<?php

declare(strict_types=1);

/** return functions */
$create_multiplier = function (int $y): callable {
    return fn (int $x) => $x * $y;
};

$number = rand();
$double = $create_multiplier(2);
$triple = $create_multiplier(3);

$doubled_number = $double($number);
$tripled_number = $triple($number);


/** pass function as string */
$letters = ['A', 'B', 'C', 'D', 'E', 'F'];
$lower_letters = array_map('strtolower', $letters);


/** pass closure */
$numbers = [1, 2, 3, 4, 5, 6];
$is_even = fn (int $x): bool => $x % 2 === 0;
$even_numbers = array_filter($numbers, $is_even);


/** multi array_map */
$str_concat = fn ($a, $b) => $a . $b;
$alpha_numeric = array_map($str_concat, $letters, $numbers);
