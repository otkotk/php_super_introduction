<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題１０」ランダムな四則演算クイズ（出力画面）</h2>
    <p>rand関数や配列を使ってランダムな四則演算（ +、-、×、÷ ）の出題をする。</p>
    <div>
        <?php
        if(isset($_REQUEST["sisokuAns"])){
            echo "<h3>解答</h3>";
            $n00 = $_REQUEST["n00"];
            $n01 = $_REQUEST["n01"];
            $sisoku_text = $_REQUEST["sisoku_text"];
            $trueAnser;

            // 記号を判定して$trueAnserに入れる
            switch($sisoku_text){
                case "+":
                    $trueAnser = $n00 + $n01;
                break;
                case "-":
                    $trueAnser = $n00 - $n01;
                break;
                case "×":
                    $trueAnser = $n00 * $n01;
                break;
                case "÷":
                    $trueAnser = floor($n00 / $n01);
                break;                    
            }

            $sisokuAns = $_REQUEST["sisokuAns"];
            $anserText = "";
            $buttonType = "nomalButton";

            // 生誤判定
            if($sisokuAns == $trueAnser){
                $anserText = "<p id='ok'>正解ですｯｯｯ！</p>";
            }else{
                $anserText = "<p id='ng'>間違いです...</p>";
            }

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $n00, $sisoku_text, $n01, "</p>";
            echo "<p>あなたの答え : ", $sisokuAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
        }
        
        // 問題ページに戻る
        echo '<form action="kadai_10.php" method="post"><input type="submit" value="次の問題へ" id="', $buttonType, '"></form>';
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>