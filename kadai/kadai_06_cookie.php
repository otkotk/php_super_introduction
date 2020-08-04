<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題６」２回出題される掛け算クイズ （入力画面）</h2>
    <div>
        <h3>問題 : 掛け算^^</h3>
        <form action="kadai_06_cookie_output.php" method="post">
            <?php
            // cookieが無かったら、新しく作る
            if(!isset($_COOKIE['count'])){
                setcookie('count', 0);
            }else if($_COOKIE['count'] >= 2){
                setcookie('count', 0);
            }
            $n00 = rand(1, 10);
            $n01 = rand(1, 10);
            echo "<p>", $n00, " × ", $n01, " = ", '<input type="text" name="kakezanAns" required></p>';
            echo '<input type="hidden" name="kakezan00" value="', $n00, '">';
            echo '<input type="hidden" name="kakezan01" value="', $n01, '">';
            ?>

            <input type="submit" value="解答する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>