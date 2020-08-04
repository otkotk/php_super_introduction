
<?php
// 課題６正答例：２回出題される掛け算クイズ （入力画面）
?>
<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="que">
<h2>「課題６」 ２回出題される掛け算クイズ （入力画面）</h2>
<form action="kadai_06_output.php" method="post">
<h3>問題</h3>
<!-- <p><input type="text" name="num1" value="5"></p> -->
<!-- <p>5×2 = </p> -->
<?php // PHPスクリプトを記述
    // 2問目の処理 もしnum1が定義されているなら2問目ということ
    if (isset($_REQUEST['num1'])) {
        $num1 = $_REQUEST['num1']; // 8
        $num2 = $_REQUEST['num2']; // 4
    } else {
    // 1問目の処理
    // 変数宣言して5を代入した変数、2を代入した変数を用意
    $num1 = 6;
    $num2 = 2;
    }
    // HTML生成
    // 変数を使って問題文をechoで表示
    //<p>6×2＝□</p>
    echo '<p>',$num1,'×',$num2,' ＝ <input type="text" name="userAns" required></p>';

    // hiddenで送るのは問題の数字。echoを使って表示する
    // value属性に変数を使う ↓このままだとvalue属性は文字列「$num1」を格納する
    //echo '<p><input type="hidden" name="num1" value="$num1"></p>';
    echo '<p><input type="hidden" name="num1" value="',$num1,'"></p>';
    echo '<p><input type="hidden" name="num2" value="', $num2, '"></p>';
?>


<p><input type="submit" value="解答する"></p>
</form>
</section>
<?php require 'footer.php'; ?>

