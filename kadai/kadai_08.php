<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="mezamashiDisplay">
    <h2>「課題８」 商品の個数をfor文で作成する（入力画面）</h2>
    <?php
    echo '<section>';
    echo '<h3>お届けする商品</h3>';
    echo '<form action="kadai_08_output.php" method="post">';
    echo '<div>';
    echo '<p>光目覚まし時計</p>';
    echo '<p>価格 : 5,260円</p>';
    echo '<p>個数 : <select name="product_01" id="">';
    for($i=0; $i<11; $i++){
        echo '<option value="', $i, '">', $i, '</option>';
    }
    echo '</p></select>';
    echo '</div>';
    
    echo '<div>';
    echo '<p>めざましカーテン(スマホ連動型カーテン自動開閉機</p>';
    echo '<p>価格 : 6,000円</p>';
    echo '<p>個数 : <select name="product_02" id="">';
    for($i=0; $i<11; $i++){
        echo '<option value="', $i, '">', $i, '</option>';
    }
    echo '</p></select>';
    echo '</div>';
    echo '</section>';
    
    echo '<section>';
    echo '<h3>お届けする商品の追加オプションを選択</h3>';
    echo '<div>';
    echo '<fieldset style="margin-bottom:20px;">';
    echo '<legend>お得な配送オプション</legend>';
    echo '<p><label><input type="radio" name="p_option" id="" value="通常配送" required>通常配送 無料</label></p>';
    echo '<p><label><input type="radio" name="p_option" id="" value="お急ぎ便">お急ぎ便 +200円</label></p>';
    echo '<p><label><input type="radio" name="p_option" id="" value="当日お急ぎ便">当日お急ぎ便 +500円</label></p>';
    echo '</fieldset>';
    echo '<fieldset>';
    echo '<legend>レビューを書いたら50円引き</legend>';
    echo '<p><select name="review" id="">';
    $reviews = [
        "選択する",
        "レビューを書く",
        "レビューを書かない"
    ];
    foreach($reviews as $item){
        echo '<option value="', $item, '">', $item, '</option>';
    }
    echo '</p></select>';
    echo '</fieldset>';
    echo '</div>';
    echo '<p><input type="submit" value="確定する"></p>';
    $p000 = 5260;
    $p001 = 6000;
    echo '<input type="hidden" name="p000" value="', $p000, '">';
    echo '<input type="hidden" name="p001" value="', $p001, '">';
    echo '</form>';
    echo '</section>';
    ?>
</section>

<?php require "footerHeaderNav/footer.php" ?>