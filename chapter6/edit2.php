<?php require "../header.php"; ?>
<div class="clearfix">
    <div class="th0" style="float:left;">ばんごー</div>
    <div class="th1" style="float:left; margin-left:20px;">なめ</div>
    <div class="th1" style="float:left; margin-left:20px;">かかく</div>
</div>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=shop;charset=utf8;", "staff", "password");

foreach($pdo -> query("select * from product") as $row){
    echo '<form class="ib" action="edit3.php" method="post">';
    echo '<input type="hidden" name="command" value="update">';
    echo '<input type="hidden" name="id" value="', $row["id"], '">';
    echo '<div class="td0">';
    echo $row["id"];
    echo '<div class="td1">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="', $row["name"], '">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="price" value="', $row["price"], '">';
    echo '</div>';
    echo '<div class="td2">';
    echo '<input type="submit" value="更新">';
    echo '</div>';
    echo '</form>';
    echo '<form class="ib" action="edit3.php" method="post">';
    echo '<input type="hidden" name="command" value="delete">';
    echo '<input type="hidden" name="id" value="', $row["id"], '">';
    echo '<input type="submit" value="削除">';
    echo '</form>';
    echo "\n";
}
?>
<div class="clearfix">
    <form action="edit3.php" method="post">
        <input type="hidden" name="command" value="insert">
        <div class="td0" style="float:left;"></div>
        <div class="td1" style="float:left; margin-left:20px;"><input type="text" name="name" id=""></div>
        <div class="td1" style="float:left; margin-left:20px;"><input type="text" name="price" id=""></div>
        <div class="td2" style="float:left; margin-left:20px;"><input type="submit" value="☆追☆加☆"></div>
    </form>
</div>

<?php require "../footer.php"; ?>