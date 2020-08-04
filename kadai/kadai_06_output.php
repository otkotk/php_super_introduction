<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanOutputDisplay">
    <h2>「課題６」２回出題される掛け算クイズ （出力画面）</h2>
    <div>
        <?php
        if(isset($_REQUEST["kakezanAns"])){
            echo "<h3>解答^o^</h3>";
            // kadai_06.phpからのリクエストパラメーターを変数に格納
            $kakezan00 = $_REQUEST["kakezan00"];
            $kakezan01 = $_REQUEST["kakezan01"];
            $kakezanAns = $_REQUEST["kakezanAns"];
            $ansCount = $_REQUEST["ansCount"];
            $trueAnser = $kakezan00 * $kakezan01;

            // 正誤判定の後にテキストを書き換える
            $anserText = "";

            // エラーの場合、ボタンを赤くする
            $buttonType = "nomalButton";

            // 正誤判定
            if($kakezanAns == $trueAnser){
                $anserText = "<p id='ok'>正解ですｯｯｯ！</p>";

                // 2回正解しているか確認する
                if($ansCount < 2){
                    $ansCount++;
                }else{
                    $ansCount = 0;
                }
            }else{
                $anserText = "<p id='ng'>間違いです...</p>";
                $ansCount = 0;
            }

            // div出力
            echo $anserText;
            echo "<p>問題 : ", $kakezan00, " × ", $kakezan01, "</p>";
            echo "<p>あなたの答え : ", $kakezanAns, "</p>";
            echo "<p>正しい答え : ", $trueAnser, "</p>";
            
            if($ansCount == 0 || $ansCount == 2){
                echo '<form action="kadai_06.php" method="post"><input type="submit" value="問題へ戻る" id="', $buttonType, '"></form>';
            }else{
                // <form>が中が送られる... \(`A´)/
                $n00 = 9;
                $n01 = 10;
                echo '<form action="kadai_06.php" method="post"><input type="submit" value="次の問題へ" id="', $buttonType, '">';
                echo '<input type="hidden" name="kakezan02" value="', $n00, '">';
                echo '<input type="hidden" name="kakezan03" value="', $n01, '">';
                echo '<input type="hidden" name="ansCount" value="', $ansCount, '">';
                echo '</form>';
            }
        }else{
            $buttonType = "errorButton";
            echo "<p>エラーが発生しました。もう一度解いて下さい。";
            echo '<form action="kadai_06.php" method="post"><input type="submit" value="問題へ戻る" id="', $buttonType, '"></form>';
        }
        
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>