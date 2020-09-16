<?php require "../header.php";?>

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

<table>
    <tr>
        <th>商品番号</th><th>商品名</th><th>価格</th>
    </tr>
    <?php
    $pdoProductAll = $pdo->query("select * from product");
    foreach($pdoProductAll as $row){
        echo "<tr>";
        echo "<td>", htmlspecialchars($row["id"]), "</td>";
        echo "<td>", htmlspecialchars($row["name"]), "</td>";
        echo "<td>", htmlspecialchars($row["price"]), "</td>";
        echo "</tr>";
        // echo "\n";
    }
    ?>
</table>

<?php require "../footer.php" ?>