<?php session_start(); ?>
<?php require "../header.php"; ?>

<?php require "menu.php"; ?>
<?php
$name = $address = $login = $password = "";
if(isset($_SESSION["customer"])){
    $name = $_SESSION["customer"]["name"];
    $address = $_SESSION["customer"]["address"];
    $login = $_SESSION["customer"]["login"];
    $password = $_SESSION["customer"]["password"];
}
echo '<form action="costomer-output.php" method="post">';
echo '<table>';
echo '<tr><td>お名前';
echo '<input type="text" name="name" value="', $name, '" id=""></td></tr>';
echo '<tr><td>ご住所';
echo '<input type="text" name="address" value="', $address, '" id=""></td></tr>';
echo '<tr><td>ログイン名';
echo '<input type="text" name="login" value="', $login, '" id=""></td></tr>';
echo '<tr><td>パスワード';
echo '<input type="text" name="password" value="', $password, '" id=""></td></tr>';
echo '</table>';
echo '<input type="submit" value="☆確☆定☆">';
echo '</form>';
?>

<?php require "../footer.php"; ?>