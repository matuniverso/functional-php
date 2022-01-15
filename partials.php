<?php

declare(strict_types=1);

/** partials */
$add = fn ($a) => fn ($b) => fn ($c) => $a + $b + $c;

$add_3 = $add(3);
$add_7 = $add_3(7);
$result = $add_7(10);

// also possible
$result_2 = $add(17)(9)(14);


var_dump($result, $result_2);
