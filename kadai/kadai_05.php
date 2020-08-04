<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題５」簡単なかけ算クイズ （入力画面）</h2>
    <div>
        <h3>問題 : 掛け算^^</h3>
        <form action="kadai_05_output.php" method="post">
            <?php
            $n005 = 5;
            $n002 = 2;
            echo "<p>", $n005, " × ", $n002, " = ", '<input type="text" name="kakezanAns" required></p>';
            echo '<input type="hidden" name="kakezan00" value="', $n005, '">';
            echo '<input type="hidden" name="kakezan01" value="', $n002, '">';
            ?>

            <input type="submit" value="解答する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>