
<?php
// 課題２正答例：単価と個数から合計金額を計算する。 【締切日：7/1(水)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題２」 商品カート（出力画面）</h2>
<h3>注文内容の確認</h3>
<?php
    if (isset($_REQUEST['price'])){
        echo '<h4>めざましカーテン（スマホ連動型カーテン自動開閉機）</h4>';
        echo '<p>価格：', $_REQUEST['price'],'円</p>';
        echo '<p>数量：', $_REQUEST['count'],'</p>';
        echo '<p>注文合計：', $_REQUEST['price'] * $_REQUEST['count'],'円</p>';
    } else {
        echo '<p>ご注文手続きにエラーが発生しました。もう一度お試しください。</p>' ;
        echo '<form action="kadai_02.php" method="post">';
        echo '<p><input type="submit" value="カートへ戻る"></p>';
        echo '</form>';
    }
?>
</section>
<?php require 'footer.php'; ?>