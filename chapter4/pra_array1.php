<?php require "../header.php"; ?>

<h1>配列を作ってみよう</h1>
<?php
$season = ["貼る","夏","空き","冬"];
echo '<p>', $season[0], '</p>';
echo '<p>', $season[3], '</p>';
echo '<p>', $season[4], '</p>';
$season[] = "雨";
echo '<p>', $season[4], '</p>';
?>

<?php require "../footer.php"; ?>