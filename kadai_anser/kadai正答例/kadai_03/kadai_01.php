
<?php
// 課題１正答例：「課題１」ユーザー名の表示 【締切日：6/30(火)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題１」 ユーザーが入力したメッセージの表示（入力画面）</h2>
<p>登録するユーザー名を入力してください。</p>
<form action="kadai_01_output.php" method="post">
<p><input type="text" name="user" required> <input type="submit" value="登録"></p>
</form>
</section>
<?php require 'footer.php'; ?>