<?php session_start(); ?>
<?php require "../header.php"; ?>

<?php require "menu.php"; ?>
<?php
if(isset($_SESSION["customer"])){
    unset($_SESSION["customer"]);
    echo '(@^^)/~~~';
}else{
    echo '???^o^???';
}
?>

<?php require "../footer.php"; ?>