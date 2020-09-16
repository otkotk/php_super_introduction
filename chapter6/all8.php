<!--p190 6-3 商品一覧を表示する⓷ s05 氏名 2020/09/09 -->
<!-- データベースから取得したテーブルのデータは PDOStatement オブジェクト(連想配列のようなもの)として返される -->
<?php require '../header.php'; ?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>

<?php
// MySQLサーバへ接続
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");

// データベースからテーブル「プロダクト」の全列のデータを取得するSQL文を用意。
$sql = 'select * from product';
	
// SQL文を実行し取得したテーブル「product」の全列のデータを変数$pdoProductAllに格納
$pdoProductAll = $pdo->query($sql);

	
// 参考：PDO->query()とは、 — SQL ステートメントを実行し、結果セットを
// PDOStatement オブジェクトとして返す https://www.weblio.jp/content/PDO-%3Equery%28%29?dictCode=PHPKR


// 参考：
// $pdoProductAllに格納されたデータは、配列の中に、
// SQL文の結果として返された際のカラム名と 0 で始まるカラム番号に添字を付けた連想配列が記述されています。（つまりPDOStatement オブジェクトで返される。）
// 格納イメージ
// $pdoProductAll = [
//	[
// 		[id] => 1,
// 		[0] => 1,
// 		[name] => '松の実',
// 		[1] => '松の実',
// 		[price] => 700,
// 		[2] => 700
//	],
//	[
// 		[id] => 2,
// 		[0] => 2,
// 		[name] => 'くるみ',
// 		[1] => 'くるみ',
// 		[price] => 270,
// 		[2] => 270
//	],
//	[
// 		[id] => 3,
// 		[0] => 3,
// 		[name] => 'ひまわりの種',
// 		[1] => 'ひまわりの種',
// 		[price] => 210,
// 		[2] => 210
//	]
// ]


// 応用：列名ではなく、インデックス番号で商品名をHTML出力してみる。
// HTML出力
// foreach($pdoProductAll as $row){
//     echo "<tr>";
// 	echo '<td>', $row[0], '</td>';
//     echo "</tr>";
// 	echo "\n";
// }



// 応用：列名ではなく、インデックス番号でid、商品名、価格をHTML出力してみる。
// HTML出力
foreach($pdoProductAll as $row){
    echo "<tr>";
	echo '<td>', $row[0], '</td>';
	echo "<td>", $row[1], "</td>";
    echo "<td>", $row[2], "</td>";
    echo "</tr>";
	echo "\n";
}

?>

</table>
<?php require '../footer.php'; ?>
