
<?php
// 課題３正答例：変数とチェックボックスを使ったクーポン割引の計算 【締切日：7/3(金)】

?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題３」 クーポン割引の商品カート（入力画面）</h2>
<form action="kadai_03_output.php"" method="post">
<h3>カート商品一覧</h3>
<h4>めざましカーテン（スマホ連動型カーテン自動開閉機）</h4>
<p>価格： <input type="text" name="price" required> 円</p>
<p>数量： <input type="text" name="count" required></p>
<p><label><input type="checkbox" name="coupon"> 10%割引クーポンを使用する</label></p>
<p><input type="submit" value="購入する"></p>
</form>
</section>
<?php require 'footer.php'; ?>