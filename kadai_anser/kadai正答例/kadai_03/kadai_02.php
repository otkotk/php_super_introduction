
<?php
// 課題２正答例：単価と個数から合計金額を計算する。 【締切日：7/1(水)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題２」 商品カート（入力画面）</h2>
<form action="kadai_02_output.php"" method="post">
<h3>カート商品一覧</h3>
<h4>めざましカーテン（スマホ連動型カーテン自動開閉機）</h4>
<p>価格： <input type="text" name="price" required> 円</p>
<p>数量： <input type="text" name="count" required></p>
<p><input type="submit" value="購入する"></p>
</form>
</section>
<?php require 'footer.php'; ?>