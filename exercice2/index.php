<?php

$ages = [
    'Alex' => 15,
    'John' => 18,
    'Mike' => 32
];

echo "Alex a ".$ages['Alex']." ans\n";
echo "John a ".$ages['John']." ans\n";
echo "Mike a ".$ages['Mike']." ans\n";

$personnes = [
    [
        'prenom' => 'Alex',
        'age' => 15,
        'is_etudiant' => true
    ],
    [
        'prenom' => 'John',
        'age' => 18,
        'is_etudiant' => true
    ],
    [
        'prenom' => 'Mike',
        'age' => 32,
        'is_etudiant' => false
    ]
];

echo "Alex a ".$personnes[0]['age']." ans\n";
echo "John a ".$personnes[1]['age']." ans\n";
echo "Mike a ".$personnes[2]['age']." ans\n";
