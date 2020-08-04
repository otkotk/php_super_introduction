<?php require "../header.php"; ?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
$sql = $pdo -> prepare('delete from product where id=?');
if($sql -> execute([$_REQUEST["id"]])){
    echo '(＾＾)';
}else{
    echo '(；o；)';
}
?>

<?php require "../footer.php"; ?>