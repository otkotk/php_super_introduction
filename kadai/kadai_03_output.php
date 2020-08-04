<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="buyResultDisplay">
    <h2>「課題３」 クーポン割引の商品カート（出力画面）</h2>
    <h3>注文内容の確認</h3>
    <div>
    <?php
    // 価格があったら
    if(isset($_REQUEST["price"])){

        // リクエストパラメーターを変数に格納
        $price = $_REQUEST["price"];
        $quantity = $_REQUEST["quantity"];
        $num = $price * $quantity;
        
        // 割引にチェックを付けていたら
        if(isset($_REQUEST["coupon"])){
            $waribiki = ($price * $quantity) * 0.1;
        }else{
            $waribiki = 0;
        }
        
        // いい感じのコード
        $num -= $waribiki;
        echo "<h4>ロマネコンティ(1994年)</h4>";
        echo "<p>価格 : ", htmlspecialchars($price), "円</p>";
        echo "<p>数量 : ", htmlspecialchars($quantity), "</p>";
        echo "<p>割引 : -", $waribiki, "円</p>";
        echo "<p>注文合計 : ", $num, "円</p>";


        // 冗長なコード
        // }else if(isset($price) && isset($quantity)) {
        //     echo "<h4>ロマネコンティ(1994年)</h4>";
        //     echo "<p>価格 : ", htmlspecialchars($price), "円</p>";
        //     echo "<p>数量 : ", htmlspecialchars($quantity), "</p>";
        //     echo "<p>割引 : -0円</p>";
        //     echo "<p>注文合計 : ", $num, "円</p>";
    }else{
        echo "<h4>ご注文手続きにエラーが発生しました。もう一度お試しください。</h4>";
        echo '<form action="kadai_03.php" method="post"><input type="submit" value="カートへ戻る" id="buyResultError"></form>';
    }
    ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>