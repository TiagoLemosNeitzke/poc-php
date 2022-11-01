<?php
// NAMED ARGUMENTS


function savePerson(
    string $name,
    string $country,
    string $momName,
    string $preferredIDE,
    int $age,
    int $height
) {
    return 'Person saved';
}

$array = [
    'name' => 'Tiago',
    'country' => 'Brazil',
    'momName' => 'Marilda',
    'preferredIDE' => 'VSCode',
    'age' => 35,
    'height' => 172
];

echo savePerson(...$array);
