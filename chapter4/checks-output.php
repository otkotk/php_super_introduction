<?php require "../header.php" ?>

<?php
if(isset($_REQUEST["genre"])){
    foreach($_REQUEST["genre"] as $item){
        echo "<p>", $item, "</p>";
    }
    echo "が選択されました。";
}else{
    echo "-- error -- チェックボックスが空です。";
}
?>

<?php require "../footer.php" ?>