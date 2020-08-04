<?php
// 課題４正答例： 簡単な足し算クイズ （入力画面）【締切日：7/7(火)】
?>

<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="que">
<h2>「課題４」 簡単な足し算クイズ（入力画面）</h2>
<form action="kadai_04_output.php"" method="post">
<h3>問題</h3>
<p> ＋ <input type="text" name="num2" value="3" required> ＝ <input type="text" name="userAns" required> </p>
<p><input type="submit" value="解答する"></p>
</form>
</section>
<?php require 'footer.php'; ?>