<?php
// Premier type de boucle (for)
for ($i = 0; $i <= 100; $i++){
    echo $i . " On rentre dans la boucle";
    echo "<br>";
}

// Deuxième type de boucle (foreach)
$myArray = [1,2,3,4,5] ;
foreach ($myArray as $value){
    $value = $value * 2;
    echo '<p>'. $value .'<p>' ;
}

// Troisième type de boucle (foreach)
$x = 0;
do{
    echo '<p>' .$x. ' Hello X ! <p>';
    $x+=1;
}while($x <= 2);

// Condition if/else + opérateurs logiques
$int = 8;

if($int >= 0 && $int <= 10){
    echo "Nous sommes entre 0 et 10";
}
if($int % 3 == 0 || $int % 5 == 0){
    echo 'Le chiffre choisit est divisible par 3 ou 5';
}
// Test avec 15
//if($int % 3 == 0 && $int % 5 == 0){
//    echo 'Le chiffre choisit est divisible par 3 et 5';
//}
else if ($int != 10){
    echo "Ce chiffre n'est pas 10";
}else {
    echo $int % 3;
    echo $int % 5;
}