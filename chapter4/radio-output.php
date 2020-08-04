<?php require "../header.php" ?>

<?php
    switch($_REQUEST["meal"]){
        case "和食":
            echo '鯖飯、鯛飯、鰻飯、たらこ飯、蛸飯<br>';
            break;
        case "洋食":
            echo "ステーキ、ハンガーガー、パスタ";
            break;
        case "中華":
            echo "炒飯、青椒肉絲、棒棒鶏";
            break;
    }
    echo "を提供いたします。";
?>

<?php require "../footer.php" ?>