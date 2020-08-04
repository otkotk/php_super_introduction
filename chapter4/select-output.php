<?php require "../header.php" ?>

<?php
    switch($_REQUEST["seat"]){
        case "指定席":
            echo "100億";
            break;
        case "グリーン席":
            echo '<h1 style="text-weight:bold; color:red;">5000兆円</h1>';
            break;
        default:
        echo "2500円";
        break;
    }
?>

<?php require "../footer.php" ?>