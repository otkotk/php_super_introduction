<?php require "../header.php" ?>

<?php
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
    if(!file_exists("upload")){
        mkdir("upload");
    }
    $file = "upload/" . basename($_FILES["file"]["name"]);
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $file)){
        // echo $file, "のアッブロードに成功じまじだ。", $_FILES["file"]["tmp_name"];
        echo $_FILES["file"]["name"], "のアッブロードに成功じまじだ。";
        echo '<p><img src="', $file, '"></p>';
    }else{
        echo "アッブロードに失敗じまじだ。";
    }
}else{
    echo "ブァイルを選択じでぐだざい。";
}
?>

<?php require "../footer.php" ?>