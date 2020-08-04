<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="mezamashiDisplay">
    <h2>「課題８」 商品の個数をfor文で作成する（出力画面）</h2>
    <div>
        <h3>お届けする商品の送料のご確認</h3>
        <?php
        // ラジオボタンが選ばれてたら
        if(isset($_REQUEST["p_option"])){
            $p000 = $_REQUEST["p000"];
            $p001 = $_REQUEST["p001"];
            $product_01 = $_REQUEST["product_01"];
            $product_02 = $_REQUEST["product_02"];
            $p_sum = 0;

            $p_sum += $p000 * $product_01;
            echo '<div>';
            echo '<p>光目覚まし時計</p>';
            echo '<p>価格 : ', $p000, '円</p>';
            echo '<p>数量 : ', $product_01, '</p>';
            echo '</div>';

            $p_sum += $p001 * $product_02;
            echo '<div>';
            echo '<p>めざましカーテン(スマホ連動型カーテン自動開閉機</p>';
            echo '<p>価格 : ', $p001, '円</p>';
            echo '<p>数量 : ', $product_02, '</p>';
            echo '</div>';

            // 配送オプションから、追加料金を決める
            $p_option = $_REQUEST["p_option"];
            $deli_fee = 0;

            switch($p_option){
                case "通常配送":
                    $deli_fee += 0;
                break;
                case "お急ぎ便":
                    $deli_fee += 200;
                break;
                case "当日お急ぎ便":
                    $deli_fee += 500;
                break;
            }

            // レビューを書いたかどうか
            $review = $_REQUEST["review"];

            switch($review){
                case "選択する":
                    $review = "";
                break;
                case "レビューを書かない":
                    $p_sum += 0;
                break;
                case "レビューを書く":
                    $p_sum -= 50;
                break;
            }

            echo '<div>';
            echo '<p>配送料 : ', $deli_fee, '円</p>';
            echo '<p>レビュー : ', $review, '</p>';
            echo '<p>合計金額 : ', $p_sum + $deli_fee, '円</p>';
            echo '</div>';
        }else{
            echo '<p>エラーが発生しました。もう一度オプションの選択をお願いします。</p>';
            echo '<form action="kadai_08.php" method="post"><input type="submit" value="問題へ戻る" id="errorButton"></form>';
        }
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>