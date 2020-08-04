<?php require "../header.php" ?>

<table>
<tr>
	<th>所品番号</th><th>商品名</th><th>価格</th>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
$sql = $pdo -> prepare("select * from product where name like ?");
$sql -> execute(["%".$_REQUEST["keyword"]."%"]);
foreach($sql as $row){
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