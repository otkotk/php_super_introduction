
<?php
// // 課題４正答例： 簡単な足し算クイズ（出力画面）  【締切日：7/7(木)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="ans">
<h2>「課題４」 簡単な足し算クイズ（出力画面）</h2>
<?php
    if (isset($_REQUEST['num1'])){
	// 変数格納
	$num1 = $_REQUEST['num1']; // 5
	$num2 = $_REQUEST['num2']; // 3
	$userAns = $_REQUEST['userAns']; // 8
	
	// 正しい答えの計算
	$correctAns = $num1 + $num2; // 5+3=8
	
	// 正誤判定の処理
	if ($userAns === $correctAns) {  // 型まで一致していればtrue
	    $message = '<p class="correct">正解です！</p>';
	} else {
		$message = '<p class="wrong">間違いです！</p>';
	}
	
	// HTML生成
	echo '<h3>解答</h3>';
	echo $message;
	echo '<p>問題：', $num1, '＋',$num2,'</p>';
	echo '<p>あなたの答え：',$userAns,'</p>';
	echo '<p>正しい答え：',$correctAns,'</p>';
    echo '<form action="kadai_04.php" method="post">';
    echo '<p><input type="submit" value="問題へ戻る"></p>';
    echo '</form>';

    } else {
        echo '<p>エラーが発生しました。もう一度解いて下さい。</p>' ;
        echo '<form action="kadai_04.php" method="post">';
        echo '<p><input type="submit" value="問題へ戻る"></p>';
        echo '</form>';
    }
?>
</section>
<?php require 'footer.php'; ?>