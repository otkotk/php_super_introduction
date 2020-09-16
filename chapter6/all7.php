<!--p190 6-3 商品一覧を表示する➁ s05 氏名 2020/09/09 -->
<!-- データベースから取得したテーブル「プロダクト」の全列のデータを、一度、変数$pdoProductAllに代入する。 -->
<?php require '../header.php'; ?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>

<?php
// MySQLサーバへ接続
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");

// 教科書では、下記のようにデータベースから取得したテーブル「プロダクト」の全列のデータから1レコードずつ$rowに代入する際に、foreach文に「PDOクラスのqueryメソッド呼び出し文」を直接記述しているが、
// HTML出力
// foreach ($pdo->query('select * from product') as $row) {
// 	echo '<tr>';
// 	echo '<td>', $row['id'], '</td>';
// 	echo '<td>', $row['name'], '</td>';
// 	echo '<td>', $row['price'], '</td>';
// 	echo '</tr>';
// 	echo "\n";
// }


// 次のように一度、変数に格納しておくことも可能。
// データベースからテーブル「プロダクト」の全列のデータを取得するSQL文を用意。
$sql = 'select * from product';

// SQL文を実行し取得したテーブル「product」の全列のデータを変数$pdoProductAllに格納
$pdoProductAll = $pdo->query($sql);


// その変数「$pdoProductAll」を使ってforeach文を書き直すと以下のようなシンプルな記述になる。
// HTML出力
// foreach($pdoProductAll as $row){
//     echo "<tr>";
// 	echo "<td>", $row["id"], "</td>";
// 	echo "<td>", $row["name"], "</td>";
//     echo "<td>", $row["price"], "</td>";
//     echo "</tr>";
// 	echo "\n";
// }

// 応用：データベースから取得したテーブル「プロダクト」の
// 商品名列「name」と価格列「price」のみ取り出したデータを、変数$pdoProductItemに代入してみよう。
// HTML出力		
$sql2 = 'select name, price from product';
$pdoProductItem = $pdo->query($sql2);

foreach($pdoProductAll as $row){
    echo "<tr>";
	echo "<td>&nbsp;-&nbsp;</td>";
	echo "<td>", $row["name"], "</td>";
    echo "<td>", $row["price"], "</td>";
    echo "</tr>";
	echo "\n";
}

?>

</table>
<?php require '../footer.php'; ?>
