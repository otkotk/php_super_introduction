<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section>
    <?php require "DrawPixel.php"; 

    // ドット絵にしたい文字を配列で指定
    $p_t_arr = ["P","H","P"];
    $p_t_arr_JAVA = ["J","A","V","A"];
    echo '<h2>Welcome to Abyss.</h2>';
    echo '<p>当サイトはPHPスクリプトで作成した課題まとめサイトです。上部ナビゲーションのリンクから見ることができます。</p>';
    echo '<p>PHPスクリプトでドット絵文字「PHP」を描きました。</p>';
    echo '<div class="clearfix" style="margin:20px 0px 0px 50px;">';

    // foreachで、配列の分だけDrawPixel関数を呼ぶ
    foreach($p_t_arr as $pt){
        DrawPixel(PixelText($pt));
    }
    echo '</div>';

    echo '<div class="clearfix" style="margin:20px 0px 0px 50px;">';
    foreach($p_t_arr_JAVA as $pt){
        DrawPixel(PixelText($pt));
    }
    echo '</div>';
    ?>
</section>

<?php require "footerHeaderNav/footer.php" ?>