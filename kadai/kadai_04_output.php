<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題４」 簡単な足し算クイズ（入力画面）</h2>
    <div>
        <?php
        // input の requied は簡単に書き変えられるので、厳格にチェックする
        if(isset($_REQUEST["tasizan00"]) && isset($_REQUEST["tasizan01"]) && isset($_REQUEST["tasizanAns"])){
            echo "<h3>解答^o^</h3>";
            $tasizan00 = $_REQUEST["tasizan00"];
            $tasizan01 = $_REQUEST["tasizan01"];
            $tasizanAns = $_REQUEST["tasizanAns"];
            $trueAnser = $tasizan00 + $tasizan01;
            $anserText = "";
            $buttonType = "nomalButton";
            

            // 生誤判定
            if($tasizanAns == $trueAnser){
                $anserText = "<p id='ok'>正解です！</p>";
            }else{
                $anserText = "<p id='ng'>間違いです！</p>";
            }

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $tasizan00, "＋", $tasizan01, "</p>";
            echo "<p>あなたの答え : ", $tasizanAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
        }
        
        // 問題ページに戻る
        echo '<form action="kadai_04.php" method="post"><input type="submit" value="問題へ戻る" id="', $buttonType, '"></form>';
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>