<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="mezamashiOutputDisplay">
    <h2>「課題７」 ラジオボタンとセレクトボックスとSWITCH文（出力画面）</h2>
    <div>
        <h3>お届けする商品の送料のご確認</h3>
        <?php
        // ラジオボタンが選ばれてたら
        if(isset($_REQUEST["p_option"])){
            $p_kakaku = $_REQUEST["p_kakaku"];

            echo '<p>光目覚まし時計</p>';
            echo '<p>価格 : ', $p_kakaku, '円</p>';

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
                    $p_kakaku += 0;
                break;
                case "レビューを書く":
                    $p_kakaku -= 50;
                break;
            }

            echo '<p>選択した配送オプション : ', $p_option, '</p>';
            echo '<p>配送料 : ', $deli_fee, '円</p>';
            echo '<p>レビュー : ', $review, '</p>';
            echo '<p>合計価格 : ', $p_kakaku + $deli_fee, '円</p>';
        }else{
            echo '<p>エラーが発生しました。もう一度オプションの選択をお願いします。</p>';
            echo '<form action="kadai_07.php" method="post"><input type="submit" value="問題へ戻る" id="errorButton"></form>';
        }
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>