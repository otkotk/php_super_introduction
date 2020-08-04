<?php require "footerHeaderNav/header.php" ?>

<?php require "footerHeaderNav/kadai_nav.php" ?>
<section>
    <h2>「課題1」 ユーザーが入力したメッセージの表示(入力画面)</h2>
    <p>登録するユーザー名を入力してください。</p>
    <form action="kadai_01_output.php" method="post">
        <input type="text" name="userName" required>
        <input type="submit" value="登録">
    </form>
</section>

<?php require "footerHeaderNav/footer.php" ?>