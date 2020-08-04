<?php require "../header.php" ?>

<?php
$postcode = $_REQUEST["postcode"];
if(preg_match("/^[0-9]{7}$/", $postcode)){
    echo "郵便番号:", $postcode;
}else{
    echo "ハイフン無し、7桁で";
}
?>

<?php require "../footer.php" ?>