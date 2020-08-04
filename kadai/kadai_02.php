<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="buyDisplay">
    <h2>「課題２」 商品カート（入力画面）</h2>
    <h3>カート商品一覧</h3>
    <div>
        <h4>ロマネコンティ(1994年)</h4>
        <form action="kadai_02_output.php" method="post">
            <p>価格 : <input type="text" name="price" value="1200000" required>円</p>
            <p>数量 : <input type="text" name="quantity" required></p>
            <input type="submit" value="購入する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>