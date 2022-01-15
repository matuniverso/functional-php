<?php

declare(strict_types=1);

function create_person(
    string $name,
    int $age
): array {
    return [
        'name' => capitalize_name($name),
        'age' => $age
    ];
}

function capitalize_name(string $name): string
{
    return ucwords(strtolower($name));
}

$person = create_person('matuniverso', 19);


var_dump($person);
