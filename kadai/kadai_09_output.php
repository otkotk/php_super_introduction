<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題９」ランダムな足し算クイズを作成する（出力画面）</h2>
    <p>rand関数を使ってランダムな２桁の数字を出題をする。</p>
    <div>
        <?php
        if(isset($_REQUEST["tasizanAns"])){
            echo "<h3>解答^o^</h3>";
            $n00 = $_REQUEST["n00"];
            $n01 = $_REQUEST["n01"];
            $tasizanAns = $_REQUEST["tasizanAns"];
            $trueAnser = $n00 + $n01;
            $anserText = "";
            $buttonType = "nomalButton";

            // 生誤判定
            if($tasizanAns == $trueAnser){
                $anserText = "<p id='ok'>正解ですｯｯｯ！</p>";
            }else{
                $anserText = "<p id='ng'>間違いです...</p>";
            }

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $n00, " + ", $n01, "</p>";
            echo "<p>あなたの答え : ", $tasizanAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
        }
        
        // 問題ページに戻る
        echo '<form action="kadai_09.php" method="post"><input type="submit" value="次の問題へ" id="', $buttonType, '"></form>';
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>