<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="buyResultDisplay">
    <h2>「課題２」 商品カート（出力画面）</h2>
    <h3>注文内容の確認</h3>
    <div>
    <?php
    if(isset($_REQUEST["price"]) && isset($_REQUEST["quantity"])){
        echo "<p>ロマネコンティ(1994年)</p>";
        echo "<p>価格 : ", htmlspecialchars($_REQUEST["price"]), "円</p>";
        echo "<p>数量 : ", htmlspecialchars($_REQUEST["quantity"]), "</p>";
        echo "<p>注文合計 : ", $_REQUEST["price"] * $_REQUEST["quantity"], "円</p>";
    }else{
        echo "<p>ご注文手続きにエラーが発生しました。もう一度お試しください。</p>";
        echo '<form action="kadai_02.php" method="post"><input type="submit" value="カートへ戻る" id="buyResultError"></form>';
    }
    ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>