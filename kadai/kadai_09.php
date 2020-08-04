<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題９」ランダムな足し算クイズ（入力画面）</h2>
    <p>rand関数を使ってランダムな２桁の数字を出題をする。</p>
    <div>
        <h3>問題</h3>
        <form action="kadai_09_output.php" method="post">
            <?php
            echo '<p>次の計算をしてください。</p>';
            $n00 = rand(1, 99);
            $n01 = rand(1, 99);
            echo "<p>", $n00, " + ", $n01, " = ", '<input type="text" name="tasizanAns" required></p>';
            echo '<input type="hidden" name="n00" value="', $n00, '">';
            echo '<input type="hidden" name="n01" value="', $n01, '">';
            ?>

            <input type="submit" value="解答する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>