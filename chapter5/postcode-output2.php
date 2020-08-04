<?php require "../header.php" ?>

<?php
$postcode = $_REQUEST["postcode"];
if(preg_match("/^[0-9]{3}-[0-9]{4}$/", $postcode)){
    echo "郵便番号:", $postcode;
}else{
    echo "ハイフンあり、7桁で";
}
?>

<?php require "../footer.php" ?>