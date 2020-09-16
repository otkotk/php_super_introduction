<?php require "../header.php"; ?>

<div class="clearfix" style="margin-left:20px">
    <div class="th0" style="float:left;">商品番号</div>
    <div class="th1" style="float:left; margin-left:100px">商品名</div>
    <div class="th1" style="float:left; margin-left:100px">価格</div>
</div>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "staff", "password");
foreach($pdo -> query("select * from product") as $row){
    echo '<div class="clearfix" style="margin-left:20px">';
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['id'], '">';
    echo '<div class="td0" style="float:left;">', sprintf("%03d",$row["id"]), '</div>';
    echo '<div class="td1" style="float:left; margin-left:100px">';
    echo '<input type="text" name="name" value="', $row["name"], '">';
    echo '</div>';
    echo '<div class="td1" style="float:left; margin-left:100px">';
    echo '<input type="text" name="price" value="', $row["price"], '">';
    echo '</div>';
    echo '<div class="td2" style="float:left; margin-left:10px"><input type="submit" value="☆更☆新☆"></div>';
    echo '</form>';
    echo '</div>';
    echo "\n";
}
?>

<?php require "../footer.php"; ?>