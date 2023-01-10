<!--<form method="post" action="index.php">-->
<!--<input type="text" name="username">-->
<!--    <input type="password" name="password">-->
<!--    <input type="submit" value="envoyer">-->
<!--</form>-->
<form action="index2.php">
    <label for="username">Votre nom:</label>
    <input type="text" name="username">
    <label for="username">Votre mot de passe:</label>
    <input type="text" name="password">
    <input type="submit">
</form>
<?php
//var_dump($_POST);
//
//if (!empty($_POST)) {
//    if ($_POST['username'] !== '' && $_POST['password'] !== '') {
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//
//        ?>
<!--        --><?php
//        if (isset($username) && isset($password)) { ?>
<!--            <p> Votre username est: --><?php //= $username ?><!-- et votre mot de passe est: --><?php //= $password ?><!-- </p>-->
<!--        --><?php //} elseif (!isset($username)) { ?>
<!--            <p> Vous avez pas défini de pseudo</p>-->
<!--        --><?php //} elseif (!isset($password)) { ?>
<!--            <p> Vous avez pas défini de mot de passe</p>-->
<!--        --><?php //}
//    }
//} ?>

<?php
var_dump($_GET);

if (!empty($_GET)) {
    if ($_GET['username'] != '' && $_GET['password'] != '') {
        $username = $_GET['username'];
        $password = $_GET['password'];

        ?>
        <?php
        if (isset($username) && isset($password)) { ?>
            <p> Votre username est: <?= $username ?> et votre mot de passe est: <?= $password ?> </p>
<?php    }
}
}
?>
    <table style="border: 1px black solid">
        <thead>
        <th>username</th>
        <th>password</th>
        </thead>
        <tbody>

        </tbody>

    </table>
