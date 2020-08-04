<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題６」２回出題される掛け算クイズ （入力画面）</h2>
    <div>
        <h3>問題 : 掛け算^^</h3>
        <form action="kadai_06_output.php" method="post">
            <?php
            if(isset($_REQUEST["ansCount"])){
                $ansCount = $_REQUEST["ansCount"];
                $n00 = $_REQUEST["kakezan02"];
                $n01 = $_REQUEST["kakezan03"];
            }else{
                $ansCount = 0;
                $n00 = 5;
                $n01 = 6;
            }
            echo "<p>", $n00, " × ", $n01, " = ", '<input type="text" name="kakezanAns" required></p>';
            echo '<input type="hidden" name="kakezan00" value="', $n00, '">';
            echo '<input type="hidden" name="kakezan01" value="', $n01, '">';
            echo '<input type="hidden" name="ansCount" value="', $ansCount, '">';
            ?>

            <input type="submit" value="解答する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>