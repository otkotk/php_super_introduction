<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題５」簡単なかけ算クイズ （出力画面）</h2>
    <div>
        <?php
        if(isset($_REQUEST["kakezanAns"])){
            echo "<h3>解答^o^</h3>";
            $kakezan00 = $_REQUEST["kakezan00"];
            $kakezan01 = $_REQUEST["kakezan01"];
            $kakezanAns = $_REQUEST["kakezanAns"];
            $trueAnser = $kakezan00 * $kakezan01;
            $anserText = "";
            $buttonType = "nomalButton";

            // 生誤判定
            if($kakezanAns == $trueAnser){
                $anserText = "<p id='ok'>正解ですｯｯｯ！</p>";
            }else{
                $anserText = "<p id='ng'>間違いです...</p>";
            }

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $kakezan00, " × ", $kakezan01, "</p>";
            echo "<p>あなたの答え : ", $kakezanAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
        }
        
        // 問題ページに戻る
        echo '<form action="kadai_05.php" method="post"><input type="submit" value="問題へ戻る" id="', $buttonType, '"></form>';
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>