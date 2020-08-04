<?php require "header.php"; ?>

<?php
$n1 = 100;
$n2 = "100";

function SwitchHikaku($n1){
    switch($n1){
        case "100":
            echo '<p style="font-weight:bold; font-size:200%;">switchは --> <span style="color:purple;">==</span> です。</p>';
        break;
        case 100:
            echo '<p style="font-weight:bold; font-size:200%;">switchは --> <span style="color:purple;">===</span> です。</p>';
        break;
    }
}

echo '<p style="font-weight:bold; font-size:200%;">100 == "100" は<span style="color:purple;">', var_dump($n1 == $n2), '</span> です。</p>';
echo '<p style="font-weight:bold; font-size:200%;">100 === "100" は<span style="color:purple;">', var_dump($n1 === $n2), '</span> です。</p>';
SwitchHikaku($n1);
$n1 = "100";
SwitchHikaku($n1);
?>

<?php require "footer.php"; ?>