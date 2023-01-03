<?php
//// Premier type de boucle (for)
//for ($i = 0; $i <= 100; $i++){
//    echo $i . " On rentre dans la boucle";
//    echo "<br>";
//}
//
//// Deuxième type de boucle (foreach)
//$myArray = [1,2,3,4,5] ;
//foreach ($myArray as $value){
//    $value = $value * 2;
//    echo '<p>'. $value .'<p>' ;
//}
//
//// Troisième type de boucle (foreach)
//$x = 0;
//do{
//    echo '<p>' .$x. ' Hello X ! <p>';
//    $x+=1;
//}while($x <= 2);
//
//// Condition if/else + opérateurs logiques
//$int = 10;
//
//if($int >= 0 && $int <= 10){
//    echo "Nous sommes entre 0 et 10";
//}
//if($int % 3 == 0 || $int % 5 == 0){
//    echo 'Le chiffre choisit est divisible par 3 ou 5';
//}
//// Test avec 15
////if($int % 3 == 0 && $int % 5 == 0){
////    echo 'Le chiffre choisit est divisible par 3 et 5';
////}
//else if ($int != 10){
//    echo "Ce chiffre n'est pas 10";
//}else {
//    echo $int % 3;
//    echo $int % 5;
//}

//for($i=0; $i <= 1337;$i++){
//    if($i === 42){
//        echo "<b>" .$i. "</b>";
//    } else{
//        echo "<p>".$i."</p>";
//    }
//}
//for($i=0; $i <= 1337;$i++){
//        if($i === 26 || $i === 37 ||$i === 88 ||$i === 111 ||$i === 3233){
//            echo "<br>";
//        }else{
//            echo "<p>".$i."</p>";
//        }
//    }

//for ($i = 0; $i <= 100; $i++) {
//    if ($i === 42) {
//        echo "<p>LaPlateforme_</p>";
//    }
//    else if ($i >= 0 && $i <= 20) {
//        echo "<i><p>" . $i . "</i></p>";
//    } else if ($i >= 25 && $i <= 50 && $i != 42) {
//        echo "<u><p>" . $i . "</u></p>";
//    } else {
//        echo "<p>" . $i . "</p>";
//    }
//}


//----------------------------------------------------------------------------------------------------
//Troisième jour (Array, manipulation de chaînes de caractères)

//$myArray = [200, 204, 173, 98, 171, 404, 459];
//
//foreach ($myArray as $key => $value)
//{
//    if ($value % 2 == 0){
//        echo '<p>'. $value. ' est pair <p>';
//    }else{
//        echo '<p>'. $value. ' est impair <p>';
//
//    }
//}
//
//
//$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie." ;
//print strrev($str);


?>
<!--<form method="post" action="index.php">-->
<!--<input type="text" name="username">-->
<!--    <input type="password" name="password">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<?php
//
//if($_POST['username'] !== '' && $_POST['password'] !== '') {
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    ?>
<!--    <table style="border: 1px black solid">-->
<!--        <thead>-->
<!--        <th>username</th>-->
<!--        <th>password</th>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        <td>--><?php //= $username;?><!--</td>-->
<!--        <td>--><?php //= $password;?><!--</td>-->
<!--        </tbody>-->
<!---->
<!--    </table>-->
<!--    --><?php
//
//    if ($username === "John" && $password == "Rambo") {
//        echo "C'est pas ma guerre";
//    } else {
//        echo "Votre pire cauchemar";
//    }
//}
?>


