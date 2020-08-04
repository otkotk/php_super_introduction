<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="tasizanDisplay">
    <h2>「課題１０」ランダムな四則演算クイズ（入力画面）</h2>
    <p>rand関数や配列を使ってランダムな四則演算（ +、-、×、÷ ）の出題をする。</p>
    <div>
        <h3>問題</h3>
        <form action="kadai_10_output.php" method="post">
            <?php
            echo '<p>次の計算を整数で答えてください。</p>';
            $n00 = rand(1, 99);
            $n01 = rand(1, 99);
            $sisoku_rand = rand(0, 3);
            $sisoku_text = ["+","-","×","÷"];
            // $sisoku_rand = $sisoku_text[rand(0, 3)]; こっちのほうが短い

            echo '<p>', $n00, $sisoku_text[$sisoku_rand], $n01, ' = ', '<input type="text" name="sisokuAns" required></p>';
            echo '<input type="hidden" name="n00" value="', $n00, '">';
            echo '<input type="hidden" name="n01" value="', $n01, '">';
            echo '<input type="hidden" name="sisoku_text" value="', $sisoku_text[$sisoku_rand], '">';
            ?>

            <input type="submit" value="解答する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>