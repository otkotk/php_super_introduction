<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section>
    <?php require "DrawPixel.php"; 
    echo '<h2>Welcome to Abyss.</h2>';
    echo '<p>当サイトはPHPスクリプトで作成した課題まとめサイトです。上部ナビゲーションのリンクから見ることができます。</p>';
    echo '<p>PHPスクリプトでドット絵文字「PHP」を描きました。</p>';
    echo '<div style="margin:20px 0px 0px 50px;">';
    DrawPixel(PixelText("P"));
    DrawPixel(PixelText("H"));
    DrawPixel(PixelText("P"));
    echo '</div>';
    ?>
</section>

<?php require "footerHeaderNav/footer.php" ?>