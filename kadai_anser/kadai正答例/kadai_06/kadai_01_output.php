
<?php
// 課題１：「課題１」ユーザー名の表示 【締切日：6/30(火)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section>
<h2>「課題１」 ユーザーが入力したメッセージの表示（出力画面）</h2>
<?php
    if (isset($_REQUEST['user'])){
    echo '<p>いらっしゃいませ、', $_REQUEST['user'], '様。</p>' ;
    } else {
        echo '<p>いらっしゃいませ、ゲスト様。</p>' ;
    }
?>
</section>
<?php require 'footer.php'; ?>