<?php require "../header.php" ?>

<?php
$password = $_REQUEST["password"];
if(preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-z0-9]{8,}/", $password)){
    echo "パスワード --> ", $password;
}else{
    echo "正規表現にマッチしませんでした。";
}
?>

<?php require "../footer.php" ?>