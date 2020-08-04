<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="mezamashiDisplay">
    <h2>「課題７」 ラジオボタンとセレクトボックスとSWITCH文（入力画面）</h2>
    <div>
        <h3>お届けする商品</h3>
        <p>光目覚まし時計</p>
        <p>価格 : 5,260円</p>
    </div>
    <div>
        <h3>お届けする商品の追加オプションを選択</h3>
        <form action="kadai_07_output.php" method="post">
            <fieldset>
            <legend>お得な配送オプション</legend>
            <p><label><input type="radio" name="p_option" id="" value="通常配送" required>通常配送 無料</label></p>
            <p><label><input type="radio" name="p_option" id="" value="お急ぎ便">お急ぎ便 +200円</label></p>
            <p><label><input type="radio" name="p_option" id="" value="当日お急ぎ便">当日お急ぎ便 +500円</label></p>
            </fieldset>
            <fieldset>
            <legend>レビューを書いたら50円引き</legend>
            <p>
                <select name="review" id="">
                <?php
                $reviews = [
                    "選択する",
                    "レビューを書く",
                    "レビューを書かない"
                ];
                foreach($reviews as $item){
                    echo '<option value="', $item, '">', $item, '</option>';
                }
                ?>
                </select>
            </p>
            </fieldset>
            <p><input type="submit" value="確定する"></p>
            <?php
            $p_kakaku = 5260;
            echo '<input type="hidden" name="p_kakaku" value="', $p_kakaku, '">';
            ?>
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>