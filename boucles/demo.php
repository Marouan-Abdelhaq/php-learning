<?php
// $chiffre = NULL;
// $heur = (int)readline('Entrer : ');

// while ($chiffre !== 10)
// {
//     $chiffre = (int)readline('Entrer heur : ');
//     break;
// }

// echo 'Bravo';

$notes = [10, 15, 16];
$eleve = [
    'cm2' => 'Jean',
    'cm1' => 'Marc'
];

foreach ($eleve as $classe => $eleve)
{
    echo "$eleve est dans classe $classe \n";
}

?>