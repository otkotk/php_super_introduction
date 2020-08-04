<?php require "../header.php" ?>

お食事を選択してください。
<form action="radio-output.php" method="get">
    <p><label><input type="radio" name="meal" value="和食" checked>和食</label></p>
    <p><label><input type="radio" name="meal" value="洋食">洋食</label></p>
    <p><label><input type="radio" name="meal" value="中華">中華</label></p>
    <p><label><input type="submit" value="確定"></label></p>
</form>

<?php require "../footer.php" ?>