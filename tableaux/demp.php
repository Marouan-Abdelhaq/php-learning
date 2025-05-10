<?php
// $notes = [10, 20, 9, 8, 5];
// // $notes = array(10, 20);
// echo $notes[3];

// $eleve = ['Marc', 'Doe', [10, 20, 30]];
// echo $eleve[2][1];

// $eleve = [
//     'nom' => 'Doe', 
//     'prenom' => 'Marc',
//     'notes' => [10, 20, 15]
// ];

// echo $eleve['nom'];
// echo $eleve['prenom'] . ' ' . $eleve['nom'];

// $eleve['prenom'] = 'Jean';
// echo $eleve['prenom'];

// $eleve['notes'][3] = 16;
// // echo $eleve['notes'];
// // echo $eleve['notes'][3];
// print_r($eleve['notes']);

// $eleve[] = 'CM2-A';

$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16, 16, 16];
    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [12, 12, 12]
    ]
]

echo $classe[1]['notes'][1];
?>