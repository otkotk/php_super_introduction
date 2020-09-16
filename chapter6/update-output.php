<?php require "../header.php"; ?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
$sql = $pdo -> prepare('update product set name=?, price=? where id =?');
if(empty($_REQUEST["name"])){
    echo '商品名を入力してください。';
}else if(!preg_match('/[0-9]+/', $_REQUEST["price"])){
    echo '商品価格を整数でにゅうううううううう';
}else if($sql -> execute([htmlspecialchars($_REQUEST["name"]), $_REQUEST["price"], $_REQUEST["id"]])){
    echo '成(＾＾)功';
}else{
    echo '失(；o；)敗';
}
?>

<table>
<tr>
	<th>所品番号</th><th>商品名</th><th>価格</th>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
foreach($pdo -> query("select * from product") as $row){
	echo "<tr>";
	echo "<td>", htmlspecialchars($row["id"]), "</td>";
	echo "<td>", htmlspecialchars($row["name"]), "</td>";
    echo "<td>", htmlspecialchars($row["price"]), "</td>";
    echo "</tr>";
	echo "\n";
}

?>
</table>

<?php require "../footer.php"; ?>