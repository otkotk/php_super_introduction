
<?php
// 課題６正答例：２回出題される割り算クイズ （入力画面）
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="que">
<h2>「課題６」 ２回出題される掛け算クイズ （入力画面）</h2>
<form action="kadai_06_output.php" method="post">
<h3>問題</h3>
<?php
	if(isset($_REQUEST['num1'])) {
		// 2回目問題の処理
		$num1 = $_REQUEST['num1']; // 8
		$num2 = $_REQUEST['num2']; // 4
		
		// HTML生成
		echo '<p>', $num1 ,'×', $num2,' ＝ <input type="text" name="userAns" required></p>';
		echo '<input type="hidden" name="num1"  value="', $num1,'">';
		echo '<input type="hidden" name="num2"  value="', $num2,'">';
		
		
	} else {
		// 初回問題の処理
		$num1 = 6;
		$num2 = 2;
		echo '<p>', $num1 ,'×', $num2,' ＝ <input type="text" name="userAns" required></p>';
		echo '<input type="hidden" name="num1"  value="', $num1,'">';
		echo '<input type="hidden" name="num2"  value="', $num2,'">';
		}
?>
<p><input type="submit" value="解答する"></p>
</form>

</section>
<?php require 'footer.php'; ?>

