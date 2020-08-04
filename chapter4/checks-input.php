<?php require "../header.php" ?>

<p>ご興味のある商品ジャンルを全て選んでください。</p>
<form action="checks-output.php" method="get">
    <?php
    $genre = ["ガメラ","バゾゴン","時計","家電","書籍","文房具","食品"];
    foreach($genre as $item){
        echo "<P>";
        echo '<input type="checkbox" name="genre[]" value="', $item, '">';
        echo $item;
        echo "</P>";
    }
    ?>
    <p><input type="submit" value="☆確☆定☆"></p>
</form>

<?php require "../footer.php" ?>