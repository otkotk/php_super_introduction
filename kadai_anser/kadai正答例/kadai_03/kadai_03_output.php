
<?php
// 課題３正答例：変数とチェックボックスを使ったクーポン割引の計算 【締切日：7/3(金)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題３」 クーポン割引の商品カート（出力画面）</h2>
<h3>注文内容の確認</h3>
<?php
    // 価格のリクエストパラメータが定義(データが格納)されているか確認
    if (isset($_REQUEST['price'])){
        // 変数格納
        // 商品価格
        $price = $_REQUEST['price']; // 6000
        // 数量
        $count = $_REQUEST['count']; //1

        // 価格と数量の小計を計算
        $subTotal = $price*$count; // 6000

        // クーポン割引の有無の確認。チェックボックスのリクエストパラメータが定義されているかを確認する。
        if (isset($_REQUEST['coupon'])) {  // ☑ならture, □ならfalse というbool値
            // 割引チェックが有る場合
            $discount = $subTotal * 0.1; // 6000*0.1 = 600
        } else {
            // 割引チェックが無い場合
            $discount = 0;
        }

        // 小計に割引価格を適用して合計価格を計算
        $total = $subTotal - $discount; // 6000-600 = 5400円

        // 出力画面の生成
        echo '<h4>めざましカーテン（スマホ連動型カーテン自動開閉機）</h4>';
        echo '<p>価格：', $price,'円</p>';
        echo '<p>数量：', $count,'</p>';
        echo '<p>割引： －',$discount,'円</p>';
        echo '<p>注文合計：', $total,'円</p>';

    } else {
        // 直接出力画面を開いた時のエラー画面の処理
        echo '<p>ご注文手続きにエラーが発生しました。もう一度お試しください。</p>' ;
        echo '<form action="kadai_03.php" method="post">';
        echo '<p><input type="submit" value="カートへ戻る"></p>';
        echo '</form>';
    }
?>
</section>
<?php require 'footer.php'; ?>