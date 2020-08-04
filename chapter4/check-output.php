<?php require "../header.php" ?>

<?php
    //isset -> 変数に値が入っていて、かつNullでないときtrue
    if(isset($_REQUEST["mail"]) == false){
        echo "お買い得情報のメールを送ります。";
    }else{
        echo "送れないよー";
    }
?>

<?php require "../footer.php" ?>