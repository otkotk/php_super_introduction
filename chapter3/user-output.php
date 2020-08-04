<?php require "../header.php" ?>

<?php
    if(isset($_REQUEST["unko"])){
        echo "ようこそ、", htmlspecialchars($_REQUEST["unko"]), "さん";
    }
?>

<?php require "../footer.php" ?>