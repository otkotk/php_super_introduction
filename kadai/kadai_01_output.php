<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section>
    <h2>「課題1」 ユーザーが入力したメッセージの表示(出力画面)</h2>
    <div>
        <?php
        if(isset($_REQUEST["userName"])){
            echo '<p>いらっしゃいませ、<span style="font-size:400;">', htmlspecialchars($_REQUEST["userName"]), "</span>様。</p>";
        }else{
            echo "いらっしゃいませ、ゲスト様。";
        }
        ?>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>