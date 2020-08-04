<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section id="buyDisplay">
    <h2>「課題３」 クーポン割引の商品カート（入力画面）</h2>
    <h3>カート商品一覧</h3>
    <div>
        <h4>ロマネコンティ(1994年)</h4>
        <form action="kadai_03_output.php" method="post">
            <p>価格 : <input type="text" name="price" value="1200000" required>円</p>
            <p>数量 : <input type="text" name="quantity" required></p>
            <label for="couponID"><p><input type="checkbox" name="coupon" id="couponID">10%割引クーポンを使用する</p></label>
            <input type="submit" value="購入する">
        </form>
    </div>
</section>

<?php require "footerHeaderNav/footer.php" ?>