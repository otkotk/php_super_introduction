<!-- s05 大田仰 2020/09/09 -->
<!-- p205 6-3 商品一覧を表示する①　htmlspecialchars()を簡略化した独自関数-->
<!-- htmlspecialchars()を簡略化する -->
<?php require "../header.php";
function h($string){
	return htmlspecialchars($string);
}
?>

<table>
<tr>
	<th>所品番号</th><th>商品名</th><th>価格</th>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
foreach($pdo -> query("select * from product") as $row){
	echo "<tr>";
	echo "<td>", h($row["id"]), "</td>";
	echo "<td>", h($row["name"]), "</td>";
    echo "<td>", h($row["price"]), "</td>";
    echo "</tr>";
	echo "\n";
}

?>
</table>

<?php require "../footer.php" ?>