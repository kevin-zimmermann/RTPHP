<?php

//Fonction array native à PHP
$arrayPhp = array('eau', 'coca-cola', 'fanta', 'oasis', 'pespi');
var_dump($arrayPhp);
//parcourir le tableau
for ($i=0; $i < count($arrayPhp); $i++){
    echo "<b>".$arrayPhp[$i] . "</b>". "<br/>";
}
//$i = 0;
//while(isset($arrayPhp[$i])){
//    echo $arrayPhp[$i]."<br>";
//    $i+=1;
//}
echo $arrayPhp[0];

// Équivalence sans utiliser de fonction PHP
$arrayAuto = ['eau', 'coca-cola', 'fanta', 'oasis', 'pespi'];
var_dump($arrayAuto);
foreach ($arrayAuto as $key => $value) {
    echo "<p> la clé est " . $key . " est la valeur associée est " . $value . "<br/>";
}
echo $arrayPhp[1];


//Créer un tableau "à la main" 1 ligne = 1 clé/index et sa valeur associée
$array[0] = 'eau';
$array[1] = 'coca-cola';
$array[2] = 'fanta';
$array[3] = 'oasis';
$array[4] = 'pespi';

var_dump($array);

// Tableau associatif
$arrayUser = ['prenom' => 'x',
    'nom' => 'y',
    'email' => 'email@email.com',
    'username' => 'username xy',
];
var_dump($arrayUser);
echo $arrayUser['email'];
foreach ($arrayUser as $key => $value) {
    echo "<p> la clé est " . $key . " est la valeur associée est " . $value;
}

//Tableau multidimensionnel
$arrayUserMulti = [
    ['prenom' => 'x',
        'nom' => 'y',
        'email' => 'email@email.com',
        'username' => 'username xy',
    ],
    ['prenom' => 'z',
    'nom' => 'a',
    'email' => 'email2@email2.com',
    'username' => 'username az',
],
];
var_dump($arrayUserMulti);

echo $arrayUserMulti[1]['username'];

//Chaîne de caractères -> array ???????
$str = "Ceci est une chaîne de caractères de 47 index";
echo "<p>".$str."</p>";
//echo "<p>".strlen($str)."</p>";
echo $str[1];
