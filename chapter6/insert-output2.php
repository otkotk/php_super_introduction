<?php require "../header.php" ?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
$sql = $pdo -> prepare("insert into product values(null, ?, ?)");
if(empty($_REQUEST["name"])){
    echo "<p>商品名を入力してください</p>";
}else if(!preg_match("/[0-9]+/", $_REQUEST["price"])){
    echo "<p>価格を整数で入力してください</p>";
}else if($sql -> execute([htmlspecialchars($_REQUEST["name"]), $_REQUEST["price"]])){
    echo "<p style='font-size:400%;'>＾＾</p>";
}else{
    echo "<p style='font-size:400%;'>😢</p>";
}
?>

<?php require "../footer.php" ?>