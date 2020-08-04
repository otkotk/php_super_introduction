
<?php
// 課題５正答例：簡単なかけ算クイズ （入力画面）【締切日：7/9(木)】
?>
<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="que">
<h2>「課題５」 簡単なかけ算クイズ（入力画面）</h2>
<form action="kadai_05_output.php" method="post">
<h3>問題</h3>
<!-- <p><input type="text" name="num1" value="5"></p> -->
<p>5×2 = </p>
<?php // PHPスクリプトを記述
    // 変数宣言して5を代入した変数、2を代入した変数を用意
    $num1 = 5;
    $num2 = 2;

    // 変数を使って問題文をechoで表示
    //<p>5×2＝□</p>
    echo '<p>',$num1,'×',$num2,' ＝ <input type="text" name="userAns"></p>';

    // hiddenで送るのは問題の数字。echoを使って表示する
    // value属性に変数を使う ↓このままだとvalue属性は文字列「$num1」を格納する
    // <p><input type="hidden" name="num1" value="$num1"></p>
    echo '<p><input type="hidden" name="num1" value="', $num1, '"></p>';
    echo '<p><input type="hidden" name="num2" value="', $num2, '"></p>';

?>


<p><input type="submit" value="解答する"></p>
</form>
</section>
<?php require 'footer.php'; ?>

