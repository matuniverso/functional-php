<?php

declare(strict_types=1);

require __DIR__ . '/champion.php';

$champions = get_champions();

/** recreate array_map */
$map = function (callable $callback, array $array) {
    return array_reduce(
        $array,
        fn ($carry, $item) => [...$carry, $callback($item)],
        []
    );
};

$champion_names = array_keys($champions);

$capitalized_names = $map(function ($item) {
    return ucwords(strtolower($item));
}, $champion_names);


var_dump($capitalized_names);
