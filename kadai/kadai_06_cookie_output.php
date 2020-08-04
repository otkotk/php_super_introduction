<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題６」２回出題される掛け算クイズ （出力画面）</h2>
    <div>
        <?php
        // if(!isset($_COOKIE['count'])){
        //     setcookie('count', 0);
        // }
        if(isset($_REQUEST["kakezanAns"])){
            echo "<h3>解答^o^</h3>";
            // kadai_06.phpからのリクエストパラメーターを変数に格納
            $kakezan00 = $_REQUEST["kakezan00"];
            $kakezan01 = $_REQUEST["kakezan01"];
            $kakezanAns = $_REQUEST["kakezanAns"];
            $trueAnser = $kakezan00 * $kakezan01;

            // 正誤判定の後にテキストを書き換える
            $anserText = "";

            // エラーの場合、ボタンを赤くする
            $buttonType = "nomalButton";

            // value をインクリメントするために、cookie を変数に格納する
            $cookieCount = $_COOKIE['count'];

            // 正誤判定
            if($kakezanAns == $trueAnser){

                // 2回以上正解していたら、cookie の value を 0 にする
                if($cookieCount >= 2){
                    $cookieCount = 0;
                }else{
                    $cookieCount++;
                }
                $anserText = "<p id='ok'>正解ですｯｯｯ！</p>";
            }else{
                $cookieCount = 0;
                $anserText = "<p id='ng'>間違いです...</p>";
            }

            // インクリメントした value を cookie にセットする(セットしないと、value が 0 のままになる)
            setcookie('count', $cookieCount);

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $kakezan00, " × ", $kakezan01, "</p>";
            echo "<p>あなたの答え : ", $kakezanAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
        }
        
        if($cookieCount == 0 || $cookieCount >= 2){
            echo '<form action="kadai_06_cookie.php" method="post"><input type="submit" value="問題へ戻る" id="', $buttonType, '"></form>';
        }else{
            echo '<form action="kadai_06_cookie.php" method="post"><input type="submit" value="次の問題へ" id="', $buttonType, '"></form>';
        }
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>