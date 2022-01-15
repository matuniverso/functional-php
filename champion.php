<?php

declare(strict_types=1);

function get_champions(): mixed
{
    $file_path = __DIR__ . '/static/champions.json';

    $json = file_get_contents($file_path);

    return json_decode($json, true);
}

function find_higher_damage(array $champions): int
{
    $filter_damage = array_column($champions, 'damage');

    return max($filter_damage);
}

function find_champions_by_class(array $champions, string $class): array
{
    $filter_class = fn ($v) => $v['class'] === $class;

    return array_filter($champions, $filter_class);
}

function sort_champions_by(array $champions, callable $callback): array
{
    uasort($champions, $callback);

    return $champions;
}

$champions = get_champions();

$higher_damage = find_higher_damage($champions);

$fighter_champions = find_champions_by_class($champions, 'fighter');

// sorting
$sorted_by_damage = sort_champions_by($champions, function ($a, $b) {
    return $a['damage'] <=> $b['damage'];
});

$sorted_by_class = sort_champions_by($champions, function ($a, $b) {
    return strcasecmp($a['class'], $b['class']);
});


var_dump($sorted_by_damage);
